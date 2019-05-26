<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenditure;

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
        $expenses = Expenditure::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        $fund = auth()->user()->fund;
        return view('home')->with([
            'fund' => $fund,
            'expenses' => $expenses
        ]);
    }
}
