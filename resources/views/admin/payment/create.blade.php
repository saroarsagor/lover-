@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Payment</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Create New Payment
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
                                <a href="{{route('roles.index')}}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-list"></i>See Record</a>
                                
                            </h4>
                        </div>
                        <div class="card-body">
                          <!--begin::Form-->
                            <form action="{{route('users.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Name" />
                                                <span class="form-text text-muted">Please enter your full name</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Choose Category</label>
                                                <select name="category_id" class="form-control form-control-solid">
                                                    <option value="" disabled selected>Choose Category</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Choose Category</label>
                                                <select name="category_id" class="form-control form-control-solid">
                                                    <option value="" disabled selected>Choose Contact</option>
                                                    @foreach ($contacts as $contact)
                                                    <option value="{{$contact->id}}">{{$contact->name}}</option>
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