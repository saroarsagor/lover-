@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Base Controls</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Base Controls Create
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
                                <a href="{{route('users.index')}}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-list"></i>See Record</a>
                                
                            </h4>
                        </div>
                        <div class="card-body">
                           
                            <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" name="name" type="text" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control" name="email" type="text" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">password</label>
                                <input class="form-control" name="password" type="password" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label class="control-label">password_confirmation</label>
                                <input class="form-control" name="password_confirmation" type="password" placeholder="Enter password_confirmation">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Roles</label>
                                <select class="form-control demoSelect" name="roles[]" id="demoSelect" multiple="">
                                    @forelse($roles as $role)
                                    <option value="{{$role}}">{{$role}}</option>
                                    @empty
                                    @endforelse
                                </select>
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