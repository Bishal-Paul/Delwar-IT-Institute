<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    function AddCareer(){

        return view('backend.career.add_career');
    }

    function PostCareer(Request $request){
        $request->validate([
            'title' => ['required'],
            'slug' => ['required', 'unique:careers'],
            'category' => ['required'],
            'type' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
            'responsivilities' => ['required'],
            'requirement' => ['required'],
            'experience' => ['required'],
        ]);

        Career::insert([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'type' => $request->type,
            'location' => $request->location,
            'description' => $request->description,
            'responsivilities' => $request->responsivilities,
            'requirement' => $request->requirement,
            'experience' => $request->experience,
            'education' => $request->education,
            'shift' => $request->shift,
            'salary' => $request->salary,
            'deadline' => $request->deadline,
            'benefits' => $request->benefits,
            'aditional_note' => $request->aditional_note,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success','Job Posted Successfully.');
    }

    function ViewCareer(){
        $career = Career::latest()->get();
        return view('backend.career.view_career', compact('career'));
    }

    function ViewFullCareer($id){
        $job = Career::where('id', $id)->first();
        return view('backend.career.view_full_career', compact('job'));
    }

    function EditCareer($id){
        $job = Career::where('id', $id)->first();
        return view('backend.career.edit_career', compact('job'));
    }

    function UpdateCareer(Request $request){
        $id = $request->job_id;

        Career::where('id', $id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'type' => $request->type,
            'location' => $request->location,
            'description' => $request->description,
            'responsivilities' => $request->responsivilities,
            'requirement' => $request->requirement,
            'experience' => $request->experience,
            'education' => $request->education,
            'shift' => $request->shift,
            'salary' => $request->salary,
            'deadline' => $request->deadline,
            'benefits' => $request->benefits,
            'aditional_note' => $request->aditional_note,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('success','Data Updated Sucessfully.');
    }

    function DeleteCareer($id){
        Career::where('id', $id)->delete();
        return back()->with('success', 'Job Deleted!');
    }
}
