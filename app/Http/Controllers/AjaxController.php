<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller {

    public function __construct()
    {
        $this->middleware(['auth:web' || 'auth:api']); 
    }


   public function setdata(Request $request){
    //   $msg = "This is a simple message.";
    //   //echo $msg;
    //   return "I am in";
    $data = 2;
    return json_encode($data);
    //return response()->json($data);

      //return response()->json(array('msg'=> $msg), 200);
    //   $rest = json_encode($msg);
    //   echo $rest;
   }
}



// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;

// class AjaxController extends Controller
// {
//     //
//     public function index(){
//         $msg = "This is a simple message.";
//         return response()->json(array('msg'=> $msg), 200);
//      }
// }
