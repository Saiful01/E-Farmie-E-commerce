<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $request['blogger_id']= Auth::guard('blogger')->id();*/
        try {
            Comment::create($request->all());
            return back()->with('success', "Successfully Save Your Comment");

        }
        catch (\Exception $exception) {

            return back()->with('failed', $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $result= Comment:: join('blogs', 'blogs.blog_id', '=', 'comments.blog_id')->get();
        return view('admin.comment.view')->with('result', $result);
    }
    public function bloggershow(Comment $comment)
    {
        $result= Comment:: join('blogs', 'blogs.blog_id', '=', 'comments.blog_id')
            ->where('comments.blogger_id', Auth::guard('blogger')->id())
            ->get();
        return view('blogger.comment.view')->with('result', $result);
    }
    public function published( $id)
    {

        try {
            Comment::where('comment_id', $id)->update([
                'is_spam' => false
            ]);

            return back()->with('success', "Successfully Published");
        } catch (\Exception $exception) {

            return back()->with('success', $exception->getMessage());
        }
    }
    public function unpublished( $id)
    {

        try {
            Comment::where('comment_id', $id)->update([
                'is_spam' => true
            ]);

            return back()->with('success', "Successfully UnPublished");
        } catch (\Exception $exception) {

            return back()->with('success', $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        try {
          Comment::where('comment_id', $id)->delete();

            return back()->with('success', "Successfully Deleted");
        } catch (\Exception $exception) {

            return back()->with('success', $exception->getMessage());
        }

    }
}
