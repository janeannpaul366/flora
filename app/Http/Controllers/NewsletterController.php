<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Newsletter;
use Auth;
use Session;

class NewsletterController extends Controller
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


    public function index(Request $request)
    {
        $newsletters = Newsletter::where('status', 1)->orderby('id', 'desc')->paginate(5);
        //return view('newsletters.index', compact('newsletters'));

        if ($request->ajax())
            return view('newsletters.index', compact('newsletters'));
        else
            return view('newsletters.ajax', compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('get'))
            return view('newsletters.form');
        else { 
                $rules = [
                    'email' => 'required|email',
                ];
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails())
                    return response()->json([
                        'fail' => true,
                        'errors' => $validator->errors()
                    ]);
                $newsletter = new Newsletter();
                $newsletter->email = $request->email;
                $newsletter->save();
                return response()->json([
                    'fail' => false,
                    'redirect_url' => url('newsletter')
                ]);
            }
        
    }

   
    public function update(Request $request, $id)
    {
        if ($request->isMethod('get'))
            return view('newsletters.form', ['newsletter' => Newsletter::find($id)]);
        else {
            $rules = [
                'email' => 'required|email',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);

            $newsletter = Newsletter::find($id);
            $newsletter->email = $request->email;
            $newsletter->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('newsletter')
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->status   =   0;
        $newsletter->save();

        return redirect('/newsletter');
    }
}
