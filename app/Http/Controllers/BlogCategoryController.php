<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        unset($request['_token']);
        try {
            BlogCategory::create($request->all());
            return back()->with('success', "Successfully Saved");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        $result=BlogCategory::get();
        return view('admin.blog_category.view')->with('result', $result);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result=BlogCategory::where('blog_category_id', $id)->first();
        return view('admin.blog_category.edit')->with('result', $result);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        unset($request['_token']);
        try {
            BlogCategory::where('blog_category_id', $request['blog_category_id'])->update($request->all());
            return back()->with('success', "Successfully Updated");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        try {
            BlogCategory::where('blog_category_id', $id)->delete();
            return back()->with('success', "Successfully deleted");
        }
        catch (\Exception $exception){
            return back()->with('failed', $exception->getMessage());
        }
    }
}
