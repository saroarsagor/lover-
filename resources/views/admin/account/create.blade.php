@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Exam</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Exam Create
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="content-body">
        <!-- Tooltip validations start -->
        <section class="tooltip-validations" id="tooltip-validation">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a href="{{route('accounts.index')}}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-list"></i>See Record</a>
                                
                            </h4>
                        </div>
                        <div class="card-body">
                           <form action="{{route('accounts.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Account Name:</label>
                                        <input type="text" name="account_name" class="form-control form-control-solid" placeholder="Enter Email" />
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Account No:</label>
                                        <input type="text" name="account_no" class="form-control form-control-solid" placeholder="Enter Email" />
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Branch:</label>
                                        <input type="text" name="branch_name" class="form-control form-control-solid" placeholder="Enter Email" />
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Choose Bank</label>
                                        <select name="bank_id" class="form-control form-control-solid">
                                            <option value="" disabled selected>Choose Bank</option>
                                            @foreach ($banks as $bank)
                                            <option value="{{$bank->id}}">{{$bank->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tooltip validations end -->
    </div>
</div>
@endsection
@section('scripts')
@endsection