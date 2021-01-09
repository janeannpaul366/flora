<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Session;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    { 
        $categories = Category::orderby('id', 'asc')->paginate(5); //show only 5 items at a time in descending order

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            //echo $request['name'];exit;
            
        if( $request->hasFile('image')) {

            // http://www.expertphp.in/article/php-laravel-5-intervention-image-upload-and-resize-tutorial

            $image                  =   $request->file('image');
            $filename               =   time()."_".$image->getClientOriginalName();
       
            $destinationPath        = public_path(). '/img/portfolio/thumbnails/small/';
            $thumb_img_small        = Image::make($image->getRealPath())->resize(50, 50);
            $thumb_img_small->save($destinationPath.'/'.$filename,80);

            $destinationPath        = public_path(). '/img/portfolio/thumbnails/';
            $thumb_img              = Image::make($image->getRealPath())->resize(650, 350);
            $thumb_img->save($destinationPath.'/'.$filename,80);
          
            $destinationPath = public_path(). '/img/portfolio/fullsize/';
            $image->move($destinationPath, $filename);

        }  

        $name      =   $request['name'];

        $category = Category::create(['name' => $name,'image' => $filename]);


        //Display a successful message upon save
        return redirect()->route('categories.index')->with('flash_message', 'category '. $category->name.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id); //Find post of id = $id

        return view ('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
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
        $this->validate($request, [
            'name'=>'required',
        ]);

        $category = Category::findOrFail($id);

        $category->name    =   $request->input('name');
        $category->status  =   $request->input('status');

        if( $request->hasFile('image')) {

            $image                  =   $request->file('image');
            $filename               =   time()."_".$image->getClientOriginalName();
       
            $destinationPath        = public_path(). '/img/portfolio/thumbnails/small/';
            $thumb_img_small        = Image::make($image->getRealPath())->resize(50, 50);
            $thumb_img_small->save($destinationPath.'/'.$filename,80);

            $destinationPath        = public_path(). '/img/portfolio/thumbnails/';
            $thumb_img              = Image::make($image->getRealPath())->resize(650, 350);
            $thumb_img->save($destinationPath.'/'.$filename,80);

            $destinationPath = public_path(). '/img/portfolio/fullsize/';
            $image->move($destinationPath, $filename); 

            $category->image    =   $filename;
        }
        else{
            $category->image    =   $request->input('image_old');
        }

        $category->save();

        return redirect()->route('categories.show', $category->id)->with('flash_message', 'category '. $category->name.' updated');
    
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category   =   Category::findOrFail($id);
        $event->delete();
 
        return redirect()->route('categories.index')->with('flash_message', 'category '. $category->name.' deleted');
    }
}
