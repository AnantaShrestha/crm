@extends('admin.layouts.admin_design')

@section('title') Add New Staff @endsection

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Add New Staff</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Add New Staff</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>New Staff Details</header>
                </div>
                <div class="card-body " id="bar-parent">
                    <form method="post" action="{{route('Staff.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Staff ID</label>
                                <input type="number" class="form-control" id="staffid" placeholder="Enter Staff ID" name="staffid" data-validation="length" value="{{old('staffid')}}" data-validation-length="number" data-validation-error-msg="Staff ID is Required number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" data-validation="length" value="{{old('fname')}}" data-validation-length="3-400" data-validation-error-msg="Name is required (3-50 chars)">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" data-validation="length" value="{{old('lname')}}" data-validation-length="3-400" data-validation-error-msg="Last Name is required (3-50 chars)">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Select Gender</label>
                                <select name="gender" id="gender" class="form-control" data-validation="required" value="{{old('gender')}}" data-validation-error-msg="Select Gender">
                                    <option selected disabled="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob">Date Of Birth</label>
                                <input type="text" class="form-control" id="datepicker" placeholder="Enter Date Of Birth" name="dob" data-validation="required" value="{{old('dob')}}" data-validation-error-msg="Select Student Date Of Birth">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Passport Sized Photo</label>
                                <input type="file" class="form-control" id="image" name="pp_photo" data-validation="mime size" data-validation-allowing="jpg, png" data-validation-max-size="1024kb" value="{{old('image')}}" data-validation-error-msg-required="Please Upload User Image">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Permanent Address</label>
                                <input type="text" class="form-control" id="address1" value="{{old('address1')}}" placeholder="Enter Permanent Address" name="address1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Temporary Address</label>
                                <input type="text" class="form-control" id="address2" value="{{old('address2')}}" placeholder="Enter Temporary Address" name="address2">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Select District</label>
                                <select name="city" id="city" class="form-control" data-validation="required" value="{{old('city')}}" data-validation-error-msg="Select Districts">
                                    <option selected value="">Please Select One...</option>
                                    @foreach($districts as $district)
                                    <option value="{{$district->district_name}}"> {{ strtoupper($district->district_name)}}</option>
                                    @endforeach
                                   

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="number" class="form-control" id="phone" value="{{old('phoneno')}}" placeholder="Enter Phone Number" name="phoneno">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Mobile Number</label>
                                <input type="number" class="form-control" id="mobileno" value="{{old('mobileno')}}" placeholder="Enter Mobile Number" name="mobileno">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Select Department</label>
                                <select name="department_id" id="department_id" class="form-control" data-validation="required" value="{{old('department_id')}}" data-validation-error-msg="Select Department">
                                    <option selected disabled="">Select Department</option>
                                   @foreach($departments as $department)
                                    <option value="{{$department->id}}" class="form-control">{{$department->departmentname}}</option>
                                @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Select Title</label>
                                <select name="title_id" id="title_id" class="form-control" data-validation="required" value="{{old('title_id')}}" data-validation-error-msg="Select Title">
                                    <option selected disabled="">Select Title</option>
                                    @foreach($designations as $designation)
                                        <option value="{{$designation->id}}">{{$designation->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Select Level</label>
                                <select name="level_id" id="level_id" class="form-control" data-validation="required" value="{{old('level_id')}}" data-validation-error-msg="Select Level">
                                    <option selected disabled="">Select Level</option>
                                    @foreach($level as $levels)
                                    <option value="{{$levels->id}}">{{$levels->level}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">PAN Number</label>
                                <input type="number" class="form-control" id="panno" value="{{old('panno')}}" placeholder="Enter PAN Number" name="panno">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob">Joined Date</label>
                                <input type="date" class="form-control" id="datepicker" placeholder="Enter Joined Date" name="join_in_date" data-validation="required" value="{{old('join_in_date')}}" data-validation-error-msg="Select Join In Date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email Address" value="{{old('email')}}" data-validation="email" name="email">
                            </div>
                            <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Password</label>
                                @error('password')
                                <span>{{$message}}</span>
                                @enderror
                                <input type="password" class="form-control" id="pass" value="{{old('password')}}" placeholder="Enter Password" name="password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Confirm Password</label>
                                @error('confirm_password')
                                <span>{{$message}}</span>
                                @enderror
                                <input type="password" class="form-control" id="password" value="{{old('password')}}" placeholder="Confirm Password" name="confirm_password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="checkbox" id="Usercheck" name="ifuser" checked>
                                <span>Register For User</span>
                            </div>
                        </div>
                        <button onclick=type="submit" class="btn btn-primary">Add New Staff</button>
                        <a href="{{ route('view_staff') }}" class="btn btn-info">View All</a>
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