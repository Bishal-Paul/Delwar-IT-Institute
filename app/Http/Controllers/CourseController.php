<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function AddCourse(){

        return view('backend.course.add_course');
    }

    function PostCourse(Request $request){
        $request->validate([
            'slug' => ['unique:courses']
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = Str::lower(Str::random(5)) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

            Course::insert([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'career' => $request->career,
                'fee' => $request->fee,
                'image' => $ext, 
                'class' => $request->class,
                'created_at' => Carbon::now()
            ]);
            return back()->with('success', 'Data inserted Successfully.');
        }

    }

    function ViewCourse(){
        $course = Course::all();
        return view('backend.course.view_course', compact('course'));
    }

    function EditCourse($id){
        $course = Course::findOrFail($id)->first();
        return view('backend.course.edit_course', compact('course'));
    }

    function UpdateCourse(Request $request){
        $id = $request->course_id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $old_image = Course::findOrFail($id)->image;
            if (file_exists(public_path('thumbnails/' . $old_image))) {
                unlink(public_path('thumbnails/' . $old_image));
            }
            $ext = Str::lower(Str::random(5)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('thumbnails/' . $ext));

            Course::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'career' => $request->career,
                'fee' => $request->fee,
                'image' => $ext,
                'class' => $request->class,
                'updated_at' => Carbon::now()
            ]);
            return back()->with('success', 'Data updated successfully');
        }
        else{
            Course::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'career' => $request->career,
                'fee' => $request->fee,
                'class' => $request->class,
                'updated_at' => Carbon::now()
            ]);

            return back()->with('success', 'Data updated successfully');
        }

    }

    function DeleteCourse($id){
        Course::findOrFail($id)->delete();
        return back()->with('success', 'Data deleted successfully');
    }
}
