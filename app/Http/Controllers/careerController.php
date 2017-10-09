<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Career;

class careerController extends Controller {

    public function index() {
        $careers = Career::all();
        return view('admin.career.index', compact('careers'));
    }

    public function destroy($id) {
        Career::find($id)->delete();
        \Session::flash('message', 'Deletion is done.');
        return \Redirect::back();
    }

}
