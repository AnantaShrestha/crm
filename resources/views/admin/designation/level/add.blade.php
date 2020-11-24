@extends('admin.layouts.admin_design')

@section('title') Add New Level @endsection

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Add New Level</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Add New Level</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>New Level Details</header>
                </div>
                <div class="card-body " id="bar-parent">
                    <form method="post" action="{{route('level.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Level</label>
                                <input type="text" class="form-control" id="level" placeholder="Enter Level" name="level" data-validation="length" value="{{old('level')}}" data-validation-length="3-400" data-validation-error-msg="Level is required (3-50 chars)">
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Job Description</label>
                                <textarea name="level_description" id="level_description" cols="30" rows="5" placeholder="Job Description..." class="form-control" value="{{old('level_description')}}"></textarea>
                            </div>
                        </div>

                        <button onclick=type="submit" class="btn btn-primary">Add New Level</button>
                        <a href="{{ route('view_levels') }}" class="btn btn-info">View Levels</a>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@section('css')

<link href="{{asset('adminAssets/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('adminAssets/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

@endsection
@section('scripts')

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            maxDate: 0,

            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'

        });
    });
</script>



<script src="{{asset('adminAssets/assets/plugins/select2/js/select2.js')}}"></script>
<script src="{{asset('adminAssets/assets/js/pages/select2/select2-init.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>
    $.validate({
        lang: 'en',
        modules: 'file',
    });
</script>
@endsection