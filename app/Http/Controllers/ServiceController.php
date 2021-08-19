<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ServiceController extends Controller
{
    function AddService()
    {

        return view('backend.service.add_service');
    }

    function PostService(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'summary' => ['required'],
            'front_img' => ['required', 'image'],
            'image' => ['required', 'image']
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = Str::lower(Str::random(5)) . '-' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

            $file2 = $request->file('front_img');
            $ext2 = Str::lower(Str::random(5)) . '-' . $file2->getClientOriginalExtension();
            $image2 = Image::make($file2)->save(public_path('thumbnails/' . $ext2));

            Service::insert([
                'title' => $request->title,
                'slug' => $request->slug,
                'image' => $ext,
                'front_img' => $ext2,
                'summary' => $request->summary,
                'created_at' => Carbon::now()
            ]);

            return back()->with('success', 'Service inserted!');

        } else {
            return back();
        }
    }

    function ViewService(){
        $service = Service::paginate(10);
        return view('backend.service.view_service', compact('service'));
    }

    function EditService($id){
        $service = Service::where('id', $id)->first();
        return view('backend.service.edit_service', compact('service'));
    }

    function UpdateService(Request $request){
        $id = $request->service_id;

        if ($request->hasFile('image')) {
            $id = $request->service_id;
            $image = $request->file('image');
            $old_image = Service::findOrFail($id)->image;

            if (file_exists(public_path('thumbnails/' . $old_image))) {
                unlink(public_path('thumbnails/' . $old_image));
            }

            $ext1 = Str::lower(Str::random(5)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('thumbnails/' . $ext1), 50);

            Service::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'image' => $ext1,
                'summary' => $request->summary,
                'updated_at' => Carbon::now()
            ]);
        }
        else {
            Service::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'summary' => $request->summary,
                'updated_at' => Carbon::now()
            ]);
        }

        if ($request->hasFile('front_img')) {
            $image2 = $request->file('front_img');
            $old_image2 = Service::findOrFail($id)->front_img;

            if (file_exists(public_path('thumbnails/' . $old_image2))) {
                unlink(public_path('thumbnails/' . $old_image2));
            }
            $ext2 = Str::lower(Str::random(5)) . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->save(public_path('thumbnails/' . $ext2), 50);

            Service::findOrFail($id)->update([
                'front_img' => $ext2,
                'updated_at' => Carbon::now()
            ]);
        }

        return redirect(route('EditService', $id))->with('success', 'Service Updated Successfully');
    }

    function DeleteService($id){
        Service::findOrFail($id)->delete();
        return back()->with('success', 'Service Deleted Successfully.');
    }
}
