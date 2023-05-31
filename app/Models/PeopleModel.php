<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleModel extends Model
{
    use HasFactory;


    protected $table = 'people_models';

    protected $fillable = [
        "first_name",
        "last_name",
        "date_of_birth",
        "phone_number",
        "street",
        "building_number",
        "flat_number",
        "city",
        "country"
    ];
}
