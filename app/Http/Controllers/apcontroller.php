<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\record;

class apcontroller extends Controller
{
    //
    // function showData($id=null)
    // {
    //     // return ["id"=>"1", "name"=>"junaid", "email"=>"junaid@email.com","dept"=>"developer",];
    //     // return record::all();
    //     // return $id?record::find($id):record::all();

    // }
    function getData($id=null)
    {
        // return ["id"=>"1","name"=>"junaid","age"=>"23","dept"=>"developer"];

        return $id?record::find($id):record::all();



    }
}
