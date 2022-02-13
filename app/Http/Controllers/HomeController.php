<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Headline;
use Auth;

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

    public function index()
    {   
        if(Auth::user()->status == 'pending')
        {
            return redirect('pending');
        }
        
        return view('home');
    }

    public function pending()
    {
        return view('user_status.pending');
    }

}
