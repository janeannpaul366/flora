<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Category;
use Session;
use Image;

class EventController extends Controller
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
        $events         =   Event::orderby('id', 'asc')->paginate(5); 
        
        foreach ($events as $eve) {
            $category_id    =   $eve->category_id;
            $category       =   Category::findOrFail($category_id);
            $category_name  =   $category->name;
            $eve['category_name']    =   $category_name;
        } 
        
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->orderby('id')->pluck('name', 'id'); 
          
        return view('events.create',compact('categories')); 
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
            'category_id'=>'required',
            'description'=>'required',
            'date'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
        
        if( $request->hasFile('image')) {
            $image                  =   $request->file('image');
            $filename               =   time()."_".$image->getClientOriginalName();
       
            $destinationPath        = public_path(). '/img/events/thumbnails/small/';
            $thumb_img_small        = Image::make($image->getRealPath())->resize(50, 50);
            $thumb_img_small->save($destinationPath.'/'.$filename,80);

            $destinationPath        = public_path(). '/img/events/thumbnails/';
            $thumb_img              = Image::make($image->getRealPath())->resize(650, 350);
            $thumb_img->save($destinationPath.'/'.$filename,80);
          
            $destinationPath = public_path(). '/img/events/fullsize/';
            $image->move($destinationPath, $filename);
        }

        $name               =   $request['name'];
        $category_id        =   $request['category_id'];
        $description        =   $request['description'];

        $event_date         =   $request['date'];
        $date               =   date('Y-m-d',strtotime($event_date));
        
        $event              =   Event::create(['name' => $name,'category_id' => $category_id, 'description' => $description, 'date' => $date, 'image' => $filename]);

        return redirect()->route('events.index')->with('flash_message', 'event '. $event->name.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event          =   Event::findOrFail($id);
        $category_id    =   $event->category_id;
        $category       =   Category::findOrFail($category_id);
        $event['category_name']      =   $category->name;
        //$categories     =   Category::where('status', 1)->where('category_id', $category_id);
        
        return view ('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event          =   Event::findOrFail($id);

        $event_date     =   $event->date;
        $date           =   date("m/d/Y", strtotime($event_date));
        $event->date    =   $date;  

        $category_id    =   $event->category_id;
        $category       =   Category::findOrFail($category_id);

        $categories     =   Category::where('status', 1)->orderby('id')->pluck('name', 'id');

        return view('events.edit', compact('categories','event'));
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
            'category_id'=>'required',
            'description'=>'required',
            'date'=>'required',
            ]);
        
            $event = Event::findOrFail($id);

            $event->name                =   $request->input('name');
            $event->category_id         =   $request->input('category_id');
            $event->description         =   $request->input('description');

            $event_date                 =   $request->input('date');
            $event->date                =   date("Y-m-d", strtotime($event_date));

            $event->status              =   $request->input('status');

            if( $request->hasFile('image')) {
                $image                  =   $request->file('image');
                $filename               =   time()."_".$image->getClientOriginalName();
           
                $destinationPath        = public_path(). '/img/events/thumbnails/small/';
                $thumb_img_small        = Image::make($image->getRealPath())->resize(50, 50);
                $thumb_img_small->save($destinationPath.'/'.$filename,80);
    
                $destinationPath        = public_path(). '/img/events/thumbnails/';
                $thumb_img              = Image::make($image->getRealPath())->resize(650, 350);
                $thumb_img->save($destinationPath.'/'.$filename,80);
              
                $destinationPath = public_path(). '/img/events/fullsize/';
                $image->move($destinationPath, $filename);

                $event->image           =   $filename;
            }
            else{
                $event->image           =   $request->input('image_old'); 
            }

            $event->save();

        return redirect()->route('events.show', $event->id)->with('flash_message', 'event, '. $event->name.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event              =   Event::findOrFail($id);
        $event->delete();
 
        return redirect()->route('events.index')->with('flash_message', 'event '. $event->name.' deleted');

    }
}
