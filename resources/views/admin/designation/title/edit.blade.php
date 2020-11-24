@extends('admin.layouts.admin_design')

@section('title') Edit Designation Title @endsection

@section('content')

<div class="page-content">
    <div class="card-body " id="bar-parent">
        <form method="post" action="{{ route ('Designation.update',$data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Edit Designation Title</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-lg-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Update Designation Title</header>
                            <br>
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label class="control-label">Designation Title:</label>
                                    <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                                </div>

                            


                                <div class="form-group">
                                    <label class="control-label">Job Description :</label><br>
                                    <textarea name="description" id="" class="form-control" rows="5" placeholder="Job Description...">{{$data->description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-body " id="bar-parent">


                            <button onclick type="submit" class="btn btn-primary">Update</button>

                            <a href="{{ route('Designation.view') }}" class="btn btn-info">View All</a>



                        </div>

                    </div>

                </div>
            </div>


        </form>
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



@endsection