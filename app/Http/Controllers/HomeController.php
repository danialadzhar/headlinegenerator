<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Headline;

class HomeController extends Controller
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

    
    public function step_1()
    {
        return view('home');
    }

    public function step_2()
    {   
        $niche = Session::get('niche');

        return view('headline.fill_in', compact('niche'));
    }

    public function step_3()
    {
        $list_headline = Headline::where('business_category', Session::get('niche'))->get();

        $niche = Session::get('niche');
        $target_market = Session::get('target_market');
        $masalah = Session::get('masalah');
        $solution = Session::get('solution');

        return view('headline.list_headline', compact('niche', 'target_market', 'masalah', 'solution', 'list_headline'));
    }

    public function fill_in_step_2(Request $request)
    {   
        $niche = Session::put('niche', $request->business_category);

        return redirect('headline/fill-in');
    }

    public function fill_in_step_3(Request $request)
    {
        $niche = Session::get('niche');
        $target_market = Session::put('target_market', $request->target_market);
        $masalah = Session::put('masalah', $request->masalah);
        $solution = Session::put('solution', $request->solution);

        return redirect('headline/result')->with(['niche' => $niche, 'target_market' => $request->target_market, 'masalah' => $request->masalah, 'solution' => $request->solution]);
    }
}