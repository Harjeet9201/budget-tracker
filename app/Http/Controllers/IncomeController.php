<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;


class IncomeController extends Controller
{
    //
    public function index()
    {
        $incomes = auth()->user()->incomes;
        return view('incomes.index', compact('incomes'));
    }

    public function create()
    {
        return view('incomes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|max:9999999999999.99|min:0',
            'description' => 'nullable|string',
            'received_at' => 'nullable|date',
        ]);

        $id = auth()->user()->id;

        $inc = new Income();
        $inc->user_id = $id;
        $inc->amount = $request->amount;
        $inc->description = $request->description;
        $inc->received_at = $request->received_at;

        $inc->save();

        return redirect()->route('incomes.index');
    }

    public function edit(Income $income)
    {
        
        return view('incomes.edit', compact('income'));
    }

    public function update(Request $request, Income $income)
    {

        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'received_at' => 'nullable|date',
        ]);

        $income->update($request->all());

        return redirect()->route('incomes.index');
    }

    public function destroy(Income $income)
    {
        $income->delete();

        return redirect()->route('incomes.index');
    }
}
