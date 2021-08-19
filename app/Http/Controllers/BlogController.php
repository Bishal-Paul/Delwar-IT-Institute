<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{
    function AddBlog(){

        return view('backend.blog.add_blog');
    }

    function PostBlog(Request $request){

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = Str::lower(Str::random(5)) . '-' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

            $tags = explode(", ", $request['tags']);
            foreach($tags as $tag){
                $tag;
            }
            
            Blog::insert([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'category' => $request->category,
                'tags' => $tag,
                'image' => $ext,
                'created_at' => Carbon::now()
            ]);

            return back()->with('success', 'Blog Published!');
        } else {
            return back()->with('error', 'Something went wrong! Please fillup all fields then Save.');
        }
        
    }

    function ViewBlog(){

        $blog = Blog::all();
        return view('backend.blog.view_blog', compact('blog'));
    }

    function EditBlog($id){
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit_blog', compact('blog'));
    }

    function UpdateBlog(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $id = $request->id;
            $old_image = Blog::findOrFail($id)->image;

            if (file_exists(public_path('thumbnails/' . $old_image))) {
                unlink(public_path('thumbnails/' . $old_image));
            }

            $ext = Str::lower(Str::random(5)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('thumbnails/' . $ext));

            $tags = explode(", ", $request['tags']);
            foreach ($tags as $tag) {
                $tag;
            }

            Blog::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'tags' => $tag,
                'category' => $request->category,
                'description' => $request->description,
                'image' => $ext,
                'updated_at' => Carbon::now()
            ]);
        } else {
            $id = $request->id;
            $tags = explode(", ", $request['tags']);
            foreach ($tags as $tag) {
                $tag;
            }
            Blog::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'tags' => $tag,
                'category' => $request->category,
                'description' => $request->description,
                'updated_at' => Carbon::now()
            ]);
        }

        return back()->with('success', 'Blog Updated Successfully');
    }

    function DeleteBlog($id){
        Blog::findOrFail($id)->delete();
        return back()->with('success', 'Blog Deleted');
    }

    // BLOG COMMENT

    function PostBlogComment(Request $request){

        BlogComment::insert([
            'blog_id' => $request->blog_id,
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'comment' => $request->comment,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Comment Published.');
    }

}
