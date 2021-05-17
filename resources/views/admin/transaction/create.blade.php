@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
<div class="main d-flex flex-column flex-row-fluid">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4" id="kt_subheader">
        <div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-2 mr-5">Contact</h5>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <div class="content flex-column-fluid" id="kt_content">
        <div class="row">
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Create New Contact</h3>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{route('roles.index')}}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-list"></i>See Record</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="Enter Name" />
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="Enter Email" />
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Mobile:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="Enter Mobile" />
                                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
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
                <!--end::Card-->


            </div>

        </div>
    </div>
    <!--end::Content-->
</div>
@endsection
@section('scripts')
@endsection