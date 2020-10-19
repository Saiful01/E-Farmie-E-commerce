<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Blogger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class BloggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bloggerdashboard()
    {
        return view('blogger.dashboard.index');
    }
    public function registration()
    {
        return view('blogger.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= BlogCategory::get();
        return view('blogger.blog.create')->with('categories',$categories);
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
                'blogger_id' => Auth::guard('blogger')->id()
            ];
        }
        else {
            $array= [

                'blog_title'=>$request['blog_title'],
                'blog_category_id'=>$request['blog_category_id'],
                'blog_details'=>$request['blog_details'],
                'author_id' => Auth::guard('blogger')->id()
            ];

        }

        try {
            Blog::create($array);
            return back()->with('success', "Successfully Post Saved");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());
        }
    }
    public function bloggerStore(Request $request)
    {
        $request['password'] = Hash::make($request['password']);
        unset($request['_token']);

        if ($request->hasFile('blogger_image')) {

            $image = $request->file('blogger_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/blogger');
            $image->move($destinationPath, $image_name);
            $array = [
                'blogger_name' => $request['blogger_name'],
                'blogger_phone' => $request['blogger_phone'],
                'password' => $request['password'],
                'blogger_email' => $request['blogger_email'],
                'blogger_image' => $image_name,


            ];
        } else {
            $array = [
                'blogger_name' => $request['blogger_name'],
                'blogger_phone' => $request['blogger_phone'],
                'password' => $request['password'],
                'blogger_email' => $request['blogger_email'],


            ];
        }


        try {
              Blogger::create($array);
            return Redirect::to('/blogger/login')->with('success', "Successfully Registered. Please LogIn Your Account");
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
    public function bloggerLogin()
    {

        return view('blogger.login');
    }
    public function doLogin(Request $request)
    {
        $blogger_email = $request['blogger_email'];
        $password =  $request['password'];

        if (Auth::guard('blogger')->attempt(['blogger_email' => $blogger_email, 'password' => $password])) {
            return redirect()->intended('/blogger/dashboard');
        }else{

            return Redirect::to('/blogger/login')
                ->with('failed', 'Email or password is wrong.')
                ->withInput();
        }



    }
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        Session::flush();
        return Redirect::to('/blogger/login');
    }
    public function bloggerProfile()
    {
        $blogger=Blogger::where('blogger_id', Auth::guard('blogger')->id())->first();
        return view('blogger.profile.index')->with('blogger',$blogger);


    }
    public function profileUpdate( Request $request)
    {

        $request['password'] = Hash::make($request['password']);
        unset($request['_token']);

        if ($request->hasFile('blogger_image')) {

            $image = $request->file('blogger_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/farmie/profile_image');
            $image->move($destinationPath, $image_name);
            $array = [
                'blogger_name' => $request['blogger_name'],
                'blogger_phone' => $request['blogger_phone'],
                'password' => $request['password'],
                'blogger_email' => $request['blogger_email'],
                'blogger_address' => $request['blogger_address'],
                'blogger_image' => $image_name,


            ];
        } else {
            $array = [
                'blogger_name' => $request['blogger_name'],
                'blogger_phone' => $request['blogger_phone'],
                'password' => $request['password'],
                'blogger_email' => $request['blogger_email'],
                'blogger_address' => $request['blogger_address'],



            ];
        }


        try {
            Blogger::where('blogger_id', $request['blogger_id'])->update($array);
            return back()->with('success', "Successfully Profile  Updated");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Blogger  $blogger
     * @return \Illuminate\Http\Response
     */
    public function show(Blogger $blogger)
    {
       $result= Blog::where('blogger_id', Auth::guard('blogger')->id())
          -> join('blog_categories', 'blog_categories.blog_category_id', '=', 'blogs.blog_category_id')
          ->get();
        return view('blogger.blog.view')->with('result',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogger  $blogger
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $result=Blog::where('blog_id', $id)->first();
        return view('blogger.blog.edit')
            ->with('categories', BlogCategory::get())
            ->with('result',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogger  $blogger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogger $blogger)
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
                'author_id' => Auth::guard('blogger')->id()
            ];
        }
        else {
            $array= [

                'blog_title'=>$request['blog_title'],
                'blog_category_id'=>$request['blog_category_id'],
                'blog_details'=>$request['blog_details'],
                'author_id' => Auth::guard('blogger')->id()
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
     * @param  \App\Blogger  $blogger
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        try {
            Blog::where('blog_id', $id)->delete();
            return back()->with('success', "Successfully Post Updated");
        } catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());
        }

    }

}
