<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MoodleController extends Controller
{
    //
    public function index(request $req)
    {
        $students = DB::table( 'mdl_user' )
        ->join('mdl_user_enrolments', 'mdl_user.id','=','mdl_user_enrolments.userid')
        // ->where('mdl_user_enrolments.enrolid',52)
        ->get();
        // echo "<pre>";
        // print_r($students);
        // echo "<pre>";

        return view('students.index')->with([
            'students' => $students,
        ]);
    }
}
