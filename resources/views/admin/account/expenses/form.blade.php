@extends('admin.layouts.admin_design')

@section('title') {{ (isset($expensescategory)?'Update':'Add New') }} Expenses Category @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">{{ (isset($expensescategory)?'Update':'Add New') }} Expenses Category</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">{{ (isset($expensescategory)?'Update':'Add New') }}Expenses Category</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>{{ (isset($expensescategory)?'':'New') }} Expenses Category Details</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        @if(isset($expensescategory))
                        <form method="post" action="{{route('expensescategory.update',$expensescategory->id)}}" enctype="multipart/form-data">

                            @method('PATCH')
                        @else
                        <form method="post" action="{{route('expensescategory.store')}}" enctype="multipart/form-data">
                            
                        @endif
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"  data-validation="required"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Name is required" value="{{isset($expensescategory) ? $expensescategory->name : old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" rows="5" class="form-control" placeholder="Description...">{{isset($expensescategory) ? $expensescategory->name : old('name') }}</textarea>
                                    </div>

                                </div>
                                
                            </div>


                            <button  type="submit" class="btn btn-primary">{{ (isset($expensescategory)?'Update':'Add New') }} Expenses Categories</button>

                            <a href="{{route('expensescategory.index')}}" class="btn btn-danger">Go Back</a>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection




@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            lang: 'en',
            modules: 'file',
        });

    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                'height' : 130
            });
        });
    </script>
@endsection