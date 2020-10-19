<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BloggerProductController extends Controller
{
    public function bloggerProductindex()
    {

        return view('blogger.product.create')->with('categories', Category::get());
    }
    public function bloggerProductstore(Request $request)
    {
        unset($request['_token']); //Remove Token
        $request['blogger_id']= Auth::guard('blogger')->id();



        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $featured_image = "feat_" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $featured_image);
        } else {
            $featured_image = 'default.jpg';
        }
/*
        if ($request->hasFile('product_image1')) {
            $image = $request->file('product_image1');
            $image_name1 = "img1" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name1);
        } else {
            $image_name1 = 'default.jpg';
        }
        if ($request->hasFile('product_image2')) {
            $image = $request->file('product_image2');
            $image_name2 = "img3" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = 'default.jpg';
        }*/

        $request->request->add(['featured_image' => $featured_image]);
        //return $request->all();
        try {
            $last_id = Product::insertGetId($request->except('feature_image', 'product_image1', 'product_image2'));
            //return $request->except('featured_image', 'product_image2', 'product_image1');
           /* $this->saveImage($last_id);*/
            return back()->with('success', "Successfully saved");
        } catch (\Exception $exception) {

            return back()->with('failed', "There was  a problem " . $exception->getMessage());
        }

    }
    public function bloggerProductshow(Product $product)
    {
        $products = Product::join('categories', 'categories.category_id', '=', 'products.product_category_id')
            ->where('blogger_id', Auth::guard('blogger')->id() )
            ->get();
        return view('blogger.product.show')->with('products', $products);
    }
    public function bloggerProductedit($id)
    {
        return view('blogger.product.edit')
            ->with('categories', Category::get())
            ->with('product', Product::join('categories', 'categories.category_id', '=', 'products.product_category_id')->where('product_id', $id)->first());
    }
    public function bloggerProductupdate(Request $request)
    {
        $product_id = $request['product_id'];
        unset($request['_token']); //Remove Token
        unset($request['product_id']); //Remove Token
        $product = Product::where('product_id', $product_id)->first();

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $featured_image = "feat_" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $featured_image);
        } else {
            $featured_image = $product->featured_image;
        }

/*        if ($request->hasFile('product_image1')) {
            $image = $request->file('product_image1');
            $image_name1 = "img1" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name1);
        } else {
            $image_name1 = 'default.jpg';
        }
        if ($request->hasFile('product_image2')) {
            $image = $request->file('product_image2');
            $image_name2 = "img3" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/product');
            $image->move($destinationPath, $image_name2);
        } else {
            $image_name2 = 'default.jpg';
        }*/

        $request->request->add(['featured_image' => $featured_image]);
        //return $request->all();
        try {
            Product::where('product_id', $product_id)->update($request->except('feature_image', 'product_image1', 'product_image2'));
            //return $request->except('featured_image', 'product_image2', 'product_image1');
           /* $this->updateImage($image_name1, $image_name2, $product_id);*/
            return back()->with('success', "Successfully Updated");
        } catch (\Exception $exception) {

            return back()->with('failed', "There was  a problem " . $exception->getMessage());
        }
    }
    public function bloggerProductdestroy($id)
    {

        try {
            Product::where('product_id', $id)->delete();
            return back()->with('success', "Successfully Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', "There was  a problem " . $exception->getMessage());
        }
    }
}
