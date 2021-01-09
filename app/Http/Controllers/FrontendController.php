<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Request;

use App\Category;
use App\Newsletter;

use Session;
use View;

Session::flash('success', 'Newsletter sent successfully!');
//return View::make('flash-messages');

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:web' || 'auth:api']); 
    }


    public function index(Request $request)
    {
        $categories         = Category::where('status', 1)->orderby('id', 'asc')->paginate(10); 
        return view('index',compact('categories'));               
    }

    /*public function addFrontend(Request $request)
    {
            // $this->layout = null;
            // //check if its our form
            // if(Request::ajax()){
            //     $name = Input::get( 'name' );
            //     $content = Input::get( 'message' );

            //     $comment = new Comment();
            //     $comment->author =  $name;
            //     $comment->comment_content = $content;
            //     $comment->save();

            //     $postComment = new CommentPost();
            //     $postComment->post_id = Input::get('post_id');
            //     $postComment->comment_id = Comment::max('id');
            //     $postComment->save();

            //     $response = array(
            //         'status' => 'success',
            //         'msg' => 'Setting created successfully',
            //     );
            //     return 'yea';
            // }else{
            //     return 'no';
            // }
            //return 'yes';
    }*/
  

    public function savenewsletter(Request $request)
    {
        
            //$email              =   Input::get('email');
            
            $newsletter         =   new Newsletter();
            $newsletter->email  =   $request->email ;
            $newsletter->save();

            return response()->json([
                         'success' =>   true,
                         'message' =>   'Newsletter sent successfully'   
                     ]); 
        

    //     $data = 2;
    // return json_encode($data);


        // $email = "hagsdkj@gmail.com";

        // $postdata = [
        //     'email' => $email
        // ];
        // DB::table('newsletters')->insert(
        //     ['email' => 'john@example.com', 'status' => 0]
        // );        

        // $response = array(
        //     'status' => 'success',
        //     'msg' => 'Setting created successfully',
        // );
        // return Response::json($response); 


        //$msg = "saved";
        //return $msg;


        // $msg = "sample message.";
        // echo $msg;
        //return response()->json(array('msg'=> $msg), 200);

       // echo "reached";exit;

        // $email = Input::get( 'email' );
        // $newsletter     =   new Newsletter();
        // $newsletter->email  =   $email ;
        // $newsletter->save();  
        // echo "saved";exit;
        // if($request->ajax()){
        //     echo "kk";exit;
        //     $email = Input::get( 'email' );
        //     $newsletter     =   new Newsletter();
        //     $newsletter->email  =   $email ;
        //     $newsletter->save();  
        //     return response()->json([
        //         'success' => 'ok'
        //     ]);  
        // }    
    }

    /*public function savenewsletterajax(Request $request)
    {
        if(Request::ajax()){
            $email              =   Input::get('email');
            $newsletter         =   new Newsletter();
            $newsletter->email  =   $email ;
            $newsletter->save();

            // $data = 'success';
            // return json_encode($data);

            return response()->json([
                         'success' =>   true,
                         'message' =>   'Newsletter sent successfully'   
                     ]); 
        }
    }*/

}
