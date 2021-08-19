<?php

namespace App\Http\Controllers;

use App\Models\Entrepreneur;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class EntrepreneurController extends Controller
{
    function AddEntrepreneur(){

        return view('backend.entrepreneurs.add_entrepreneurs');
    }

    function PostEntrepreneur(Request $request){
        $request->validate([
            'name' => ['required'],
            'username' => ['required', 'unique:entrepreneurs'],
            'post' => ['required'],
            'image' => ['required'],
            'summary' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = Str::lower(Str::random(5)) . '-' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

            if ($request->hasFile('ex_img')) {
                $file2 = $request->file('ex_img');
                $ext2 = Str::lower(Str::random(5)) . '-' . $file2->getClientOriginalExtension();
                $image2 = Image::make($file2)->save(public_path('thumbnails/' . $ext2));
            }
            if ($request->hasFile('success_img')) {
                $file3 = $request->file('success_img');
                $ext3 = Str::lower(Str::random(5)) . '-' . $file3->getClientOriginalExtension();
                $image3 = Image::make($file3)->save(public_path('thumbnails/' . $ext3));
            }

            Entrepreneur::insert([
                'name' => $request->name,
                'username' => $request->username,
                'post' => $request->post,
                'image' => $ext,
                'summary' => $request->summary,
                'experience' => $request->experience,
                'success_story' => $request->success_story,
                'ex_img' => $ext2,
                'success_img' => $ext3,
                'created_at' => Carbon::now()
            ]);
            return back()->with('success', 'Data inserted Successfully.');
        }
    }

    function ViewEntrepreneur(){
        $entrepreneur = Entrepreneur::all();
        return view('backend.entrepreneurs.view_entrepreneurs', compact('entrepreneur'));
    }

    function EditEntrepreneur($id){
        $entrepreneur = Entrepreneur::where('id', $id)->first();
        return view('backend.entrepreneurs.edit_entrepreneur', compact('entrepreneur'));
    }

    function UpdateEntrepreneur(Request $request){
        $id = $request->entrepreneur_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $old_image = Entrepreneur::findOrFail($id)->image;
            if (file_exists(public_path('thumbnails/' . $old_image))) {
                unlink(public_path('thumbnails/' . $old_image));
            }
            $ext = Str::lower(Str::random(5)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('thumbnails/' . $ext));

            Entrepreneur::findOrFail($id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'post' => $request->post,
                'image' => $ext,
                'summary' => $request->summary,
                'experience' => $request->experience,
                'success_story' => $request->success_story,
                'updated_at' => Carbon::now()
            ]);
        }
        if ($request->hasFile('ex_img')) {
            $ex_img = $request->file('ex_img');
            $old_image2 = Entrepreneur::findOrFail($id)->ex_img;
            if (file_exists(public_path('thumbnails/' . $old_image2))) {
                unlink(public_path('thumbnails/' . $old_image2));
            }
            $ext2 = Str::lower(Str::random(5)) . '.' . $ex_img->getClientOriginalExtension();
            Image::make($ex_img)->save(public_path('thumbnails/' . $ext2));

            Entrepreneur::findOrFail($id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'post' => $request->post,
                'summary' => $request->summary,
                'experience' => $request->experience,
                'success_story' => $request->success_story,
                'ex_img' => $ext2,
                'updated_at' => Carbon::now()
            ]);
        }
        if ($request->hasFile('success_img')) {
            $success_img = $request->file('success_img');
            $old_image3 = Entrepreneur::findOrFail($id)->success_img;
            if (file_exists(public_path('thumbnails/' . $old_image3))) {
                unlink(public_path('thumbnails/' . $old_image3));
            }
            $ext3 = Str::lower(Str::random(5)) . '.' . $success_img->getClientOriginalExtension();
            Image::make($success_img)->save(public_path('thumbnails/' . $ext3));

            Entrepreneur::findOrFail($id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'post' => $request->post,
                'summary' => $request->summary,
                'experience' => $request->experience,
                'success_story' => $request->success_story,
                'success_img' => $ext3,
                'updated_at' => Carbon::now()
            ]);
        } else {
            Entrepreneur::findOrFail($id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'post' => $request->post,
                'summary' => $request->summary,
                'experience' => $request->experience,
                'success_story' => $request->success_story,
                'updated_at' => Carbon::now()
            ]);
        }

        return back()->with('success', 'Data Updated Successfully');
    }

    function DeleteEntrepreneur($id){
        Entrepreneur::findOrFail($id)->delete();
        return back()->with('success', 'Emtrepreneur Entry Deleted Successfully.');
    }
}
