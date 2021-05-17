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
                    <h2 class="content-header-title float-left mb-0">Exam</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Exam List
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
                            <a href="{{route('accounts.create')}}" class="btn btn-primary">New Record</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-nowrap">#</th>
                                    <th scope="col" class="text-nowrap">Account Name</th>
                                    <th scope="col" class="text-nowrap">Account No</th>
                                    <th scope="col" class="text-nowrap">Branch</th>
                                    <th scope="col" class="text-nowrap">Bank</th>
                                    <th scope="col" class="text-nowrap text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($accounts as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->account_name??'' }}</td>
                                    <td>{{ $row->account_no??'' }}</td>
                                    <td>{{ $row->branch_name??'' }}</td>
                                    <td>{{ $row->bank->name??'' }}</td>
                                    
                                    <td>
                                        <div class="float-right">
                                           
                                                <a href="{{ route('accounts.edit', $row->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('accounts.destroy',$row->id)}}" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button data-name="{{ $row->name }}" type="submit" class="btn btn-danger btn-sm delete-confirm">
                                                        <i class="fa fa-lg fa-trash"></i>Delete
                                                    </button>
                                                </form>
                                                

                                        </div>
                                    </td>
                                </tr>
                                 @endforeach
                               
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