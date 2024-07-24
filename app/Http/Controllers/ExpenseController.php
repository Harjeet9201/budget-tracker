<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expense;


class ExpenseController extends Controller
{
    //
    public function index()
    {
        $expenses = auth()->user()->expenses;
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|max:9999999999999.99|min:0',
            'description' => 'nullable|string',
            'received_at' => 'nullable|date',
        ]);

        $id = auth()->user()->id;

        $inc = new Expense();
        $inc->user_id = $id;
        $inc->amount = $request->amount;
        $inc->description = $request->description;

        $inc->save();

        return redirect()->route('expenses.index');
    }

    public function edit(Expense $expense)
    {
        
        return view('expenses.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense)
    {

        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'received_at' => 'nullable|date',
        ]);

        $expense->update($request->all());

        return redirect()->route('expenses.index');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index');
    }
}
