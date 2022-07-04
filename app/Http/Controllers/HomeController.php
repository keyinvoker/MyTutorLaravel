<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home()
    {
        $tutor_id = Auth::user()->id;
        //1. get data
        $allSubjects = Subject::where('tutor_id', $tutor_id)->paginate(3);

        //2. make an associative arr. to store data
        $data = [
            'subjects' => $allSubjects
        ];

        return view('home', $data);
    }
}
