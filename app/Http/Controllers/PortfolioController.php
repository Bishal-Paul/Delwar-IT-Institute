<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class PortfolioController extends Controller
{
    //Portfolio
    function AddPortfolio()
    {
        $category = PortfolioCategory::all();
        return view('backend.portfolio.add_portfolio', compact('category'));
    }

    function PostPortfolioCategory(Request $request){
        PortfolioCategory::insert([
            'cat_name' => $request->cat_name,
            'created_at' => Carbon::now()
        ]);
        return back()->with('cat_success', 'Category Inserted.');
    }

    function PostPortfolio(Request $request){
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = Str::lower(Str::random(5)) . '.' . $file->getClientOriginalExtension();
            $image = Image::make($file)->save(public_path('thumbnails/' . $ext));

            Portfolio::insert([
                'title' => $request->title,
                'cat_id' => $request->category_id,
                'image' => $ext,
                'github' => $request->github,
                'created_at' => Carbon::now()
            ]);

            return back()->with('success', 'Portfolio Added Successfully.');
        }
    }

    function ViewPortfolio(){
        $category = PortfolioCategory::latest()->get();
        $portfolio = Portfolio::with('category')->get();
        return view('backend.portfolio.view_portfolio', compact('category', 'portfolio'));
    }

    function DeletePortfolioCategory($id){
        PortfolioCategory::findOrFail($id)->delete();
        return back()->with('cat_success', 'Portfolio Category Deleted.');
    }

    function DeletePortfolio($id){
        Portfolio::findOrFail($id)->delete();
        return back()->with('success', 'Portfolio Deleted.');
    }
}
