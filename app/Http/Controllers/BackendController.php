<?php

namespace App\Http\Controllers;

use App\Models\AdmissionForm;
use App\Models\Project;
use App\Models\Team;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class BackendController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    // TEAM SECTION
    function AddTeam()
    {
        return view('backend.team.add_team');
    }

    function PostTeam(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'post' => ['required'],
            'image' => ['required', 'image']
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = Str::lower(Str::random(5)) . '-' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

            Team::insert([
                'name' => $request->name,
                'post' => $request->post,
                'image' => $ext,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'created_at' => Carbon::now()
            ]);

            return back()->with('success', 'Data inserted!');
        } 
        
        else {
            return back();
        }
    }

    function ViewTeam(){
        $team = Team::paginate(10);
        return view('backend.team.view_team', compact('team'));
    }

    function DeleteTeam($id){
        Team::findOrFail($id)->delete();
        return back()->with('success', 'Member Deleted Successfully.');
    }


    // TESTIMONIAL
    function AddTestimonial(){

        return view('backend.testimonial.add_testimonial');
    }

    function PostTestimonial(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'post' => ['required'],
            'message' => ['required'],
            'image' => ['required', 'image']
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = Str::lower(Str::random(5)) . '-' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

            Testimonial::insert([
                'name' => $request->name,
                'post' => $request->post,
                'message' => $request->message,
                'image' => $ext,
                'created_at' => Carbon::now()
            ]);

            return back()->with('success', 'Data inserted!');
        } else {
            return back();
        }
    }

    function ViewTestimonial(){
        $testimonial = Testimonial::paginate(10);
        return view('backend.testimonial.view_testimonial', compact('testimonial'));
    }

    // Start Project
    function ViewProject(){
        $project = Project::latest()->get();
        return view('backend.project.view_submitted_projects', compact('project'));
    }

    function ViewProjectDetails($id){
        $project = Project::where('id', $id)->first();
        return view('backend.project.view_full_project', compact('project'));
    }

    function DeleteProject($id){
        Project::findOrFail($id)->delete();
        return back()->with('success', 'Project Deleted Successfully.');
    }


    //Admission
    function ShowAdmission(){
        $admission = AdmissionForm::latest()->get();
        return view('backend.admission.view_admission', compact('admission'));
    }

    function DeleteAdmission($id){
        AdmissionForm::findOrFail($id)->delete();
        return back()->with('success', 'Admission Info Deleted Successfully.');
    }

    function ViewAdmission($id){
        $admission = AdmissionForm::where('id', $id)->first();
        return view('backend.admission.admission_details', compact('admission'));
    }

    
}
