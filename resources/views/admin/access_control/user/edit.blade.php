@extends('admin.layouts.master')
@section('styles')
@endsection
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">User</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">User Edit
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
                         
                         <form action="{{route('users.update',$user->id)}}" method="POST" class="form-group">
        @csrf
        @method('put')
        <div class="tile-title-w-btn">
            <h3 class="title">Edit User</h3>
            <p>
                <a class="btn btn-primary btn-sm icon-btn" href="{{route('user.index')}}"><i class="fa fa-list"></i>See
                    List</a>
            </p>
        </div>

        {{ Form::text('name', null, $user->name, ['class'=>'form-control input-sm']) }}
        {{ Form::text('email', null,  $user->email, ['class'=>'form-control input-sm']) }}
        {{ Form::password('password', null, ['class'=>'form-control input-sm']) }}
        {{ Form::password('password_confirmation', null, ['class'=>'form-control input-sm']) }}
        {{ Form::select('roles[]', 'Roles', $roles, $selected_roles ?? '', ['class'=>'form-control input-sm demoSelect']) }}

        {{ Form::submit('Submit') }}
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
@section('js')
<script type="text/javascript" src="{{url(asset('assets/js/plugins/bootstrap-datepicker.min.js'))}}'))}}">
</script>
<script type="text/javascript" src="{{url(asset('assets/js/plugins/select2.min.js'))}}"></script>
<script type="text/javascript" src="{{url(asset('assets/js/plugins/bootstrap-datepicker.min.js'))}}"></script>
<script type="text/javascript">
    $('#sl').on('click', function () {
            $('#tl').loadingBtn();
            $('#tb').loadingBtn({text: "Signing In"});
        });

        $('#el').on('click', function () {
            $('#tl').loadingBtnComplete();
            $('#tb').loadingBtnComplete({html: "Sign In"});
        });

        $('#demoDate').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
        });

        $('#demoSelect').select2();
</script>