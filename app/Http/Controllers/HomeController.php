<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        $exibir = User::where('id',$userId)->get();
        foreach ($exibir as $key => $value) {
        
        }
        
        return view('home', compact('exibir'));

    }

    public function lim_parcela(Request $request)
    {
       dd($request->input());
        $limite = 0.3;
        $userId = Auth::id();
        $exibir = User::where('id',$userId)->get();
        $r = $exibir->renda * $limite;
        


    }



    // public function exibir(){
    //    
    //     return view('home', compact('exibir'));
    // }

    
}
