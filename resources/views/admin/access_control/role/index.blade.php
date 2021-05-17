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
                    <h2 class="content-header-title float-left mb-0">Role</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Role List
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
                            <a href="{{route('roles.create')}}" class="btn btn-primary">New Record</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Guard Name</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($roles as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->guard_name}}</td>

                                <td>
                                    {{--                                            @can('Role Edit')--}}
                                    <div class="btn-group">
                                    <a class="btn btn-info btn-sm" href="{{ route('roles.edit', $row->id) }}">
                                        <i class="fa fa-lg fa-edit"></i>Edit
                                    </a> &nbsp;
                                        <form method="POST" action="{{ route('roles.destroy',$row->id)}}"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button data-name="{{ $row->name }}" type="submit"
                                                class="btn btn-danger btn-sm delete-confirm">
                                                <i class="fa fa-lg fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                    {{--                                            @endcan--}}
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