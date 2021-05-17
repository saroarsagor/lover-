@extends('admin.layouts.master')
@section('styles')
<!-- <link href="{{asset('')}}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> -->
@endsection
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Transaction List</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Transaction List
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
    <div class="content-body">
        <!-- Responsive tables start -->
        <div class="row" id="table-responsive">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <a href="" class="btn btn-primary">New Record</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th width="10%">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th width="20%">Action</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                               
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Responsive tables end -->
    </div>
</div>
@endsection
@section('scripts')
<!-- <script src="{{asset('')}}assets/plugins/custom/datatables/datatables.bundle.js"></script> -->
<!--end::Page Vendors-->
@endsection