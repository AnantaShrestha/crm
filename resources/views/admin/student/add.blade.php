@extends('admin.layouts.admin_design')

@section('title')   Add New Customer @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Customer</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Customer</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add New Customer</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="{{route('addStudent')}}" enctype="multipart/form-data">
                            @csrf

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Photo</label>
                                    <input type="hidden" name="current_image">
                                    <input type="file" class="form-control" id="image"
                                           name="image" data-validation="mime size"
                                           data-validation-allowing="jpg, png"
                                           data-validation-max-size="1024kb" value="{{old('image')}}"
                                           data-validation-error-msg-required="Please Upload User Image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname"
                                           placeholder="Enter First Name" name="fname" data-validation="length" value="{{old('fname')}}"
                                           data-validation-length="3-400"
                                           data-validation-error-msg="Name is required (3-50 chars)">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname"
                                           placeholder="Enter Last Name" name="lname" data-validation="length" value="{{old('lname')}}"
                                           data-validation-length="3-400"
                                           data-validation-error-msg="Last Name is required (3-50 chars)">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Select Gender</label>
                                    <select name="gender" id="gender" class="form-control" data-validation="required" value="{{old('gender')}}"
                                            data-validation-error-msg="Select Student Gender">
                                        <option selected disabled="">Select  Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  for="dob">Date Of Birth</label>
                                    <input type="text" class="form-control" id="datepicker"
                                           placeholder="Enter Date of Birth" name="dob" data-validation="required" value="{{old('dob')}}"
                                           data-validation-error-msg="Select Date of Birth">
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Enter Email Address"  value="{{old('email')}}" data-validation="email" name="email">
                                </div>
                                <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="customer_type">Customer Type</label>
                                        <select class='form-control' data-validation="required"
                                            data-validation-error-msg="Customer Type is required" name="customer_type">
                                                <option value="" selected>Select One...</option>
                                                <option value="Organization">Organization</option>
                                                <option value="Individual">Individual</option>

                                        </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shift">Please Select Service
                                    </label>
                                    <select id="shift" class="form-control select2-multiple" name="course_id[]" multiple data-validation="required"
                                            data-validation-error-msg="At One Least a service is required">
                                        <option value="" selected>Select One...</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="district">Select District</label>
                                   <select class="form-control" name="citi">
                                       <option value="" selected>Please Select One</option>
                                       @foreach($districts as $district)
                                            <option value="{{$district->district_name}}">
                                                {{ strtoupper($district->district_name)}}
                                            </option>
                                       @endforeach
                                   </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Permanent Address</label>
                                    <input type="text" class="form-control" id="address" value="{{old('address')}}"
                                           placeholder="Enter Permanent  Address" name="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Temporary Address</label>
                                    <input type="text" class="form-control" id="address2" value="{{old('address2')}}"
                                           placeholder="Enter  Temporary Address" name="address2" data-validation="required"
                                            data-validation-error-msg="Temporary Address is required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" value="{{old('phone')}}"
                                           placeholder="Enter Phone Number" name="phone" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile" value="{{old('mobile')}}"
                                           placeholder="Enter Mobile Number" name="mobile" >
                                </div>
                            </div>

                          

                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="checkbox" id="Usercheck" name="usercheck"  checked>
                                    <span>Register For User</span>
                                </div>
                            </div>





                            <button onclick="checkUserEmail()" type="submit" class="btn btn-primary">Add New Customer</button>

                            <a href="{{ route('viewStudent') }}" class="btn btn-info">View All</a>

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
        $( function() {
            $( "#datepicker" ).datepicker({
                maxDate: 0,
                
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
                
            });
        } );
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
    <script>
        


        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: 'Please Select Service'
            });


        });
    </script>
@endsection
