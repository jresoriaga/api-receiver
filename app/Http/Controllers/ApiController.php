<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    //
    public function index(Request $req)
    {
        // $user = New Api();
        // $user->username = $req->username;
        // $user->password = $req->password;
        // $user->confirmed = $req->confirmed;
        // $user->firstname = $req->firstname;
        // $user->lastname = $req->lastname;
        // $user->email = $req->email;
        // $user->city = $req->city;
        // $user->country = $req->country;
        
        // $data = $user->save();


        // if(!$data)
        // {
        // return response()->json([
        //     'status' => 400,
        //     'error' => 'something went wrong'
        // ]);
        // } else
        // {
        // return response()->json([
        //     'status' => 200,
        //     'success' => 'Update Success!'
        // ]);
        // }
        $user = file_get_contents('http://127.0.0.1:8000/api/moodle');
        $data = Api::create([$user]);


        if(!$data)
        {
        return response()->json([
            'status' => 400,
            'error' => 'something went wrong'
        ]);
        } else
        {
        return response()->json([
            'status' => 200,
            'success' => 'Update Success!'
        ]);
        }

        // return json_decode($data,true);  
    }
}
