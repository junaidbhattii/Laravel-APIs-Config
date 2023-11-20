<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\record;
use Validator;

class apiController extends Controller
{
    //
    function getData($id=null)
    {
        return $id?record::find($id):record::all();
    }

    //Function To POST Data(ADD)

    function addData(Request $req)
    {
        $record = new record;
        $record->name = $req->name;
        $record->passwprd = $req->passwprd;
        $record->email = $req->email;
        $data = $record->save();
        if($data)
        {
            echo "record is added to list:";
        }
        else{
            echo "something went wrong";
        }

    }

    //Function To POST Data(UPDATE)

    function updateData(Request $req)
    {
        $record = record::find($req->id);
        $record->name = $req->name;
        $record->passwprd = $req->passwprd;
        $record->email = $req->email;
        $data = $record->update();
        if($data)
        {
            echo "record is updated:";
        }
        else{
            echo "something went worng:";
        }
    }

       //Function To POST Data(UPDATE)

       function deleteData(Request $req)
       {
            $record = record::find($req->id);
            $data = $record->delete();
            if($data)
            {
                echo " record is deleted:";
            }
            else{
                echo " something went wrong";
            }
       }
       
       //Function To SEARCH Data(SEARCH)

       function searchData($name)
       {
            return record::where("name","like", "%".$name."%")->get();
            // return $record;
       }

         //Function To SEARCH Data(SEARCH)

         function validateData(Request $req)
         {
            // return ["ex"=>"yx"];
            $rules=array(
                "name"=>"required",
                "passwprd"=>"required | min:5",
                "email"=>"required"
            );
            $validate = Validator::make($req->all(), $rules);
            if($validate->fails())
            {
                return $validate->errors();
            }
            else{
                $record = new record;
                $record->name = $req->name;
                $record->passwprd = $req->passwprd;
                $record->email = $req->email;
                $result = $record->save();
                if($result)
                {
                    echo "record added succesfully";
                }
                else{
                    echo "something went wrong";
                }
            }
         }
}
