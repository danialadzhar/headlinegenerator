<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Headline;

class HeadlineController extends Controller
{
    public function index()
    {   
        // return view('copywriting');

        return redirect('login');
    }

    public function result_headline(Request $request)
    {   
        $list_headline = Headline::all();

        $niche = $request->session()->get('niche');
        $target_market = $request->session()->get('target_market');
        $masalah = $request->session()->get('masalah');
        $solution = $request->session()->get('solution');

        return view('result_headline', compact('niche', 'target_market', 'masalah', 'solution', 'list_headline'));
    }

    public function generate(Request $request)
    {   
        $niche = Session::put('niche', $request->niche);
        $target_market = Session::put('target_market', $request->target_market);
        $masalah = Session::put('masalah', $request->masalah);
        $solution = Session::put('solution', $request->solution);

        // $niche = $request->session()->put('niche', $request->niche);
        // $target_market = $request->session()->put('target_market', $request->target_market);
        // $masalah = $request->session()->put('masalah', $request->masalah);
        // $solution = $request->session()->put('solution', $request->solution);

        return redirect('result-headline')->with(['niche' => $request->niche, 'target_market' => $request->target_market, 'masalah' => $request->masalah, 'solution' => $request->solution]);
    }

    public function headline_create()
    {
        return view('create');
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
