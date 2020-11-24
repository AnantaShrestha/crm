@extends('admin.layouts.admin_design')

@section('title') Add Designation Title @endsection

@section('content')
<style type='text/css'>
    .red {
        color: red;
        font-size: 12px;
        background: none !important;
    }
</style>

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Add Designation Title</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Add Designation Title</li>
            </ol>
        </div>
    </div>
    <form method="post" action="{{ route('Designation.store') }}">
        @csrf
        <div class="row">
            <div class="col-lg-9 col-lg-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New User Designation</header>
                        <br>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label">Designation Title:</label>
                                @error('title')
                                <p class="red">{{$message}}</p>
                                @enderror
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            </div>



                            <div class="form-group">
                                <label class="control-label">Job Description:</label><br>
                                <textarea name="description" id="" class="form-control" rows="5" placeholder="Job Decription..."></textarea>
                            </div>
                        </div>



                    </div>




                    <div class="col-md-8">
                        @if(Session::has('flash_message_error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {!! session('flash_message_error') !!}

                        </div>
                        @endif
                    </div>


                    <div class="card-body " id="bar-parent">


                        <button onclick type="submit" class="btn btn-primary">Add New Title</button>

                        <a href="{{ route('Designation.view') }}" class="btn btn-info">View All</a>



                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

@endsection



@section('css')
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css') }}">
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>
    $.validate({
        lang: 'en',
        modules: 'file',
    });
</script>


@endsection