<?php

namespace App\Http\Controllers;

use App\Models\PeopleModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class People extends Controller
{
    public function index()
    {
        $people = PeopleModel::all();

        return response()->json($people, Response::HTTP_OK);
    }

    public function show($id)
    {
        $person = PeopleModel::findOrFail($id);

        return response()->json($person, Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $oldPerson = PeopleModel::findOrFail($id);
        $person = PeopleModel::findOrFail($id);

        $person->update($request->json()->all());

        return response()->json(['' => 'Person was updated successfully', 'Old' => $oldPerson, 'Updated' => $person],
         Response::HTTP_OK);
    }

    public function remove($id)
    {
        $person = PeopleModel::findOrFail($id);

        $person->delete();

        return response()->json(['Person was deleted successfully' => $person], Response::HTTP_OK);
    }

    public function create(Request $request)
    {
        $requestData = $request->json()->all();

        $validatedData = Validator::make($requestData, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|numeric',
            'street' => 'required|string',
            'building_number' => 'required|numeric',
            'flat_number' => 'required | numeric',
            'city' => 'required|string',
            'country' => 'required|string',

        ])->validate();

        $person = PeopleModel::create($validatedData);

        return response()->json(['Person was added successfully' => $person], Response::HTTP_CREATED);
    }
    
}