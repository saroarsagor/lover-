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
                    <h2 class="content-header-title float-left mb-0">Budget</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Budget List
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
                            <a href="{{route('budgets.create')}}" class="btn btn-primary">New Record</a>
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
                                    <th>Amount</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($budgets as $row)
                                <tr style="background-color: #F5F5F5; text-align: center;">
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->category->name??'' }}</td>
                                    <td>{{ $row->amount }}</td>
                                    <td>
                                        {{-- @can('Contact Edit')--}}

                                        <div class="btn-group">
                                            <a class="btn btn-info btn-sm" href="{{ route('budgets.edit', $row->id) }}">
                                                <i class="fa fa-lg fa-edit"></i>Edit
                                            </a> &nbsp;
                                            <form method="POST" action="{{ route('budgets.destroy',$row->id)}}" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button data-name="{{ $row->name }}" type="submit" class="btn btn-danger btn-sm delete-confirm">
                                                    <i class="fa fa-lg fa-trash"></i>Delete
                                                </button>
                                            </form>
                                            {{-- &nbsp; <a href="{{ route('Contact-reset', $row->id) }}">--}}
                                            {{-- <i class="fa fa-refresh" aria-hidden="true" style="color: #0D5245"></i>--}}
                                            {{-- <i class="fa fa-undo" style="color: #0D5245"></i>--}}
                                            {{-- </a> &nbsp;--}}
                                        </div>

                                        {{-- @endcan--}}
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