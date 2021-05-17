<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Account;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AccountController extends Controller
{
  
    public function index()
    {
        $data = [
            'accounts' => Account::latest()->get(),
        ];
        return view('admin.account.index', $data);
    }
    public function create()
    {
        $data = [
            'banks' => Bank::latest()->get(),
            'model' => new Account()
          
        ];
        return view('admin.account.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'account_name' => 'required',
            'branch_name' => 'required',
            'account_no' => 'required',
            'bank_id' => 'required',
        ]);
        $account = new Account();
        $account->fill($request->all());
        $account->save();
        Toastr::success('Account Created Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
