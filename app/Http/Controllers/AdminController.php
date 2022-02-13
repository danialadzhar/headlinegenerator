<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headline;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list_headline()
    {   
        $count = 1;
        $headline = Headline::orderBy('id', 'Desc')->get();

        return view('admin.list_headline', compact('headline', 'count'));
    }

    public function headline_update(Request $request, $id)
    {
        $update = Headline::where('id', $id)->first();

        $update->headline = $request->headline;

        $update->save();

        return redirect()->back()->with('success', 'Headline updated!');
    }
}
