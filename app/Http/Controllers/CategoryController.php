<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check()) {
                return Redirect::to('/admin/login');
            }
            return $next($request);
        });
    }


    public function create()
    {
        return view('admin.pages.category.create');
    }


    public function store(Request $request)
    {
        $category_name = $request['category_name'];

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $image_name = "img3" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/category');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = 'default.jpg';
        }

        $arr = array(
            'category_image' => $image_name,
            'category_name' => $category_name,
        );

        try {

            Category::create($arr);
            return back()->with('success', "Successfully saved");
        } catch (\Exception $exception) {

            return back()->with('failed', "There was  a problem " . $exception->getMessage());
        }

    }

    public function show(Category $category)
    {
        return view('admin.pages.category.show')->with('categories', Category::get());
    }


    public function edit($id)
    {
        return view('admin.pages.category.edit')->with('category', Category::where('category_id', $id)->first());
    }


    public function update(Request $request)
    {

        $category_name = $request['category_name'];
        $category_id = $request['category_id'];

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $image_name = "img3" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/category');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = 'default.jpg';
        }

        $arr = array(
            'category_image' => $image_name,
            'category_name' => $category_name,
        );

        try {

            Category::where('category_id', $category_id)->update($arr);
            return back()->with('success', "Successfully Updated");
        } catch (\Exception $exception) {

            return back()->with('failed', "There was  a problem " . $exception->getMessage());
        }

    }


    public function destroy($id)
    {
        try {
            Category::where('category_id', $id)->delete();
            return back()->with('success', "Successfully Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', "There was  a problem " . $exception->getMessage());
        }
    }
}
