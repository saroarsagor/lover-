<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class BudgetController extends Controller
{
    public function index()
    {
        $data = [
            'budgets' => Budget::latest()->get(),
        ];
        return view('admin.budget.index', $data);
    }
    public function create()
    {
        $data = [
            'model' => new Budget(),
            'categories' => Category::latest()->get(),

        ];

        return view('admin.budget.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'category_id' => 'required',
        ]);
        $budget = new Budget();
        $budget->fill($request->all());
        $budget->save();
        Toastr::success('Budget Created Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('budgets.index');
    }


    public function show(Budget $budget)
    {
        //
    }

    public function edit(Budget $budget)
    {
        $categories = Category::latest()->get();
        return view('admin.budget.edit', compact('budget','categories'));
    }
    public function update(Request $request, Budget $budget)
    {
        $this->validate($request, [
            'amount' => 'required',
            'category_id' => 'required',
        ]);
        $budget->fill($request->all());
        $budget->save();
        Toastr::success('Budget Updated Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('budgets.index');
    }
    public function destroy(Budget $budget)
    {
        $budget->delete();
        Toastr::success('Budget Deleted Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('budgets.index');
    }
}
