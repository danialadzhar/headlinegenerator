<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Headline;
use Auth;

class HeadlineController extends Controller
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

    public function index()
    {   
        // return view('copywriting');

        return redirect('login');
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

        return redirect('headline/step-2');
    }

    public function fill_in_step_3(Request $request)
    {
        $niche = Session::get('niche');
        $target_market = Session::put('target_market', $request->target_market);
        $masalah = Session::put('masalah', $request->masalah);
        $solution = Session::put('solution', $request->solution);

        return redirect('headline/result')->with(['niche' => $niche, 'target_market' => $request->target_market, 'masalah' => $request->masalah, 'solution' => $request->solution]);
    }

    public function headline_create()
    {
        if (Auth::user()->role == 'member') 
        {
            return redirect('home');
        }

        return view('headline.create');
    }

    public function headline_store(Request $request)
    {
        Headline::create([
            'headline' => $request->headline,
            'business_category' => $request->business_category
        ]);

        return redirect()->back()->with('success', 'New headline added!');
    }
}
