<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\addRequest;
use App\Http\Requests\editRequest;
use App\Technology;
use App\Subscribe;

class subscribersController  extends Controller
{
         public function index()
     {
         $subscribers=Subscribe::all();
         return view('admin.subscribers.index',compact('subscribers'));
     }
     
     public function destroy($id)
     {
         Subscribe::find($id)->delete();
         return \Redirect::route('admin.subscribers.index');
     }
     
}
