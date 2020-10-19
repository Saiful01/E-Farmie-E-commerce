<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
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
        $categories= BlogCategory::get();
        return view('admin.blog.create')->with('categories',$categories);
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
        if ($request->hasFile('featured_image')) {


            $image = $request->file('featured_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/farmie/blog');
            $image->move($destinationPath, $image_name);
            $array = [

                'blog_title' => $request['blog_title'],
                'blog_category_id' => $request['blog_category_id'],
                'featured_image' => $image_name,
                'blog_details' => $request['blog_details'],
                'blogger_id' => Auth::user()->id


            ];
        }
            else {
                $array= [

                    'blog_title'=>$request['blog_title'],
                    'blog_category_id'=>$request['blog_category_id'],
                    'blog_details'=>$request['blog_details'],
                    'blogger_id' => Auth::user()->id
                ];

            }


        try {
            Blog::create($array);
            return back()->with('success', "Successfully Post Saved");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $result= Blog::join('blog_categories', 'blog_categories.blog_category_id', '=', 'blogs.blog_category_id')
            ->orderBy('blogs.created_at', 'DESC')
            ->get();
        return view('admin.blog.view')->with('result',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

        $result=Blog::where('blog_id', $id)->first();
        return view('admin.blog.edit')
            ->with('categories', BlogCategory::get())
            ->with('result',$result);
    }
    public function published( $id)
    {

        try {
            Blog::where('blog_id', $id)->update([
                'publish_status' => true
            ]);

            return back()->with('success', "Successfully Published");
        } catch (\Exception $exception) {

            return back()->with('success', $exception->getMessage());
        }
    }
    public function unpublished( $id)
    {

        try {
            Blog::where('blog_id', $id)->update([
                'publish_status' => false
            ]);

            return back()->with('success', "Successfully UnPublished");
        } catch (\Exception $exception) {

            return back()->with('success', $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        unset($request['_token']);

        if ($request->hasFile('featured_image')) {


            $image = $request->file('featured_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/farmie/blog');
            $image->move($destinationPath, $image_name);
            $array = [

                'blog_title' => $request['blog_title'],
                'blog_category_id' => $request['blog_category_id'],
                'featured_image' => $image_name,
                'blog_details' => $request['blog_details'],
                'blogger_id' => Auth::user()->id
            ];
        }
        else {
            $array= [

                'blog_title'=>$request['blog_title'],
                'blog_category_id'=>$request['blog_category_id'],
                'blog_details'=>$request['blog_details'],
                'blogger_id' => Auth::user()->id
            ];

        }

        try {
            Blog::where('blog_id', $request['blog_id'])->update($array);
            return back()->with('success', "Successfully Post Updated");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Blog::where('blog_id', $id)->delete();
            return back()->with('success', "Successfully Post Updated");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());
        }
    }
}
