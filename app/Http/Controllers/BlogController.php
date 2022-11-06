<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','DESC')->get();
        return view('admin.blog.all', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id','DESC')->get();
        $subcategories = SubCategory::orderBy('id','DESC')->get();
        return view('admin.blog.create', compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'title' => 'required',
            'details' => 'required',
            'photo' => 'required|mimes:jpeg,jpg, png',
            'status' => 'required'
        ]);

        $image = $request->file('photo');
        if (isset($image)) {
            $photoname = Str::slug($request->title).'-'.'uniqId()'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('blog')) {
                mkdir('blog', 777, true);
            }
            $image->move('blog',$photoname);
        }else{
            $photoname = 'default.png';
        }

        $category = new Blog();
        $category->category_id = $request->category_id;
        $category->sub_category_id = $request->sub_category_id;
        $category->title = $request->title;
        $category->details = $request->details;
        $category->slug = Str::slug($request->title);
        $category->photo = $photoname;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('blogs.index')->with('success','Blog create success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
