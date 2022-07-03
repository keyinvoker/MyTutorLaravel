<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    public function getDetails(Request $request)
    {
        $id = $request->id;

        $selectedSubject = Subject::where('subject_id', $id)->first();

        $data = [
            'selectedSubject' => $selectedSubject,
        ];

        return view('components.subject.details', $data);
    }

    
    public function getEditingForm(Request $request){
        $id = $request->id;
        
        $selectedSubject = Subject::where('subject_id', $id)->first();
        
        $data = [
            'selectedSubject' => $selectedSubject,
        ];
        
        return view('components.subject.edit', $data);
    }
    public function editSubject(Request $request){
        $id = $request->id;
        $name = $request->name;
        $sessions = $request->sessions;
        $price = $request->price;
        $rating = $request->rating;
        $description = $request->description;

        Subject::where('subject_id', $request->id)->first()->update([
            'subject_id' => $id,
            'subject_name' => $name,
            'subject_sessions' => $sessions,
            'subject_price' => $price,
            'subject_rating' => $rating,
            'subject_description' => $description,
        ]);

        return redirect('home');
    }
    
    public function getInsertForm(){
        return view('components.subject.insert');
    }
    public function insertSubject(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'name' => ['required' ,'min:5'],
            'sessions' => ['integer', 'required'],
            'price' => ['required', 'integer'],
            'rating' => ['required', 'numeric', 'min:0.0', 'max:5.0'],
            'description' => ['required', 'min:10'],
        ]);

        $rules->validate();

        $sbj = new Subject;
        $sbj->subject_name = $request->name;
        $sbj->subject_description = $request->description;
        $sbj->subject_price = $request->price;
        $sbj->subject_sessions = $request->sessions;
        $sbj->subject_rating = $request->rating;
        $sbj->tutor_id = Auth::user()->id;

        $sbj->save();

        return redirect('home');
    }
}
