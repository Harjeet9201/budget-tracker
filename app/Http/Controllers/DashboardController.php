<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalIncome = auth()->user()->incomes()->sum('amount');
        $totalExpense = auth()->user()->expenses()->sum('amount');
        $balance = $totalIncome - $totalExpense;

        return view('dashboard', compact('totalIncome', 'totalExpense', 'balance'));
    }
}
