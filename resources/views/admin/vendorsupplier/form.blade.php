@extends('admin.layouts.admin_design')

@if(isset($vendor))
@section('title')   Edit New Vendor/Supplier @endsection
@else
@section('title')   Add New Vendor/Supplier @endsection
@endif

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">{{isset($vendor) ? 'Edit' : 'Add New'}} Vendor/Supplier</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                 href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
             </li>
             <li class="active">{{isset($vendor) ? 'Edit' : 'Add New'}} Vendor/Supplier</li>
         </ol>
     </div>
 </div>
 <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>{{isset($vendor) ? 'Edit' : 'Add New'}} Vendor/Supplier</header>
            </div>
            <div class="card-body " id="bar-parent">
                @if(isset($vendor))
                <form method="post" action="{{route('vendor.update',$vendor->id)}}" enctype="multipart/form-data">
                    @method('PATCH')
                @else
                <form method="post" action="{{route('vendor.store')}}" enctype="multipart/form-data">
                @endif
                    @csrf

                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname"
                                placeholder="Enter First Name" name="fname" data-validation="required" value="{{isset($vendor) ? $vendor->fname : old('fname')}}"
                                data-validation-error-msg="First Name is required">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname"
                                placeholder="Enter Last Name" name="lname" data-validation="required" value="{{isset($vendor) ? $vendor->lname : old('lname')}}"
                                data-validation-error-msg="Last Name is required">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Select Gender</label>
                                <select name="gender" id="gender" class="form-control" data-validation="required" value="{{old('gender')}}"
                                data-validation-error-msg="Select Student Gender">
                                <option selected disabled="">Select  Gender</option>
                                <option value="Male" @if(isset($vendor)) @if($vendor->gender=='Male') selected @endif @endif>Male</option>
                                <option value="Female" @if(isset($vendor)) @if($vendor->gender=='Female') selected @endif @endif>Female</option>
                                <option value="Others" @if(isset($vendor)) @if($vendor->gender=='Others') selected @endif @endif>Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label  for="dob">Date Of Birth</label>
                            <input type="text" class="form-control" id="datepicker"
                            placeholder="Enter Date Of Birth" name="dob" data-validation="required" value="{{isset($vendor) ? $vendor->dob : old('dob')}}"
                            data-validation-error-msg="Select Date Of Birth">
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label  for="email">Email address</label>
                            <input type="email" class="form-control" id="email"
                            placeholder="Enter E-mail Address"  value="{{isset($vendor) ? $vendor->email : old('email')}}" data-validation="email" name="email" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="customer_type">Vendor/Supplier Type</label>
                            <select class='form-control' data-validation="required"
                            data-validation-error-msg="Vendor Type is required" name="vendor_type" value="{{old('vendor_type')}}">
                            <option value="" selected>Select One...</option>
                            <option value="Organization" @if(isset($vendor)) @if($vendor->vendor_type=='Organization') selected  @endif @endif>Organization</option>
                            <option value="Individual" @if(isset($vendor)) @if($vendor->vendor_type=='Individual') selected  @endif @endif>Individual</option>

                        </select>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="shift">Please Select Service
                        </label>
                        <select id="shift" class="form-control select2-multiple" name="course_id[]" multiple data-validation="required"
                        data-validation-error-msg="At One Least a service is required">
                        <option value="">Select One...</option>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}" @if(isset($vendor)){{ in_array($course->id, $course_vendor) ? 'selected' : '' }} @endif>{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="registrationnumber">Registration Number</label>
                    <input type="text" name="registrationnumber" placeholder="Enter Registration Number" class="form-control" value="{{isset($vendor) ? $vendor->registrationnumber : old('registrationnumber')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="panvat">PAN/VAT Number</label>
                    <input type="text" name="panvatnumber" placeholder="Enter PAN/VAT Number" class="form-control" value="{{isset($vendor) ? $vendor->panvatnumber : old('panvatnumber')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" 
                    placeholder="Enter City" name="city" data-validation="required" data-validation-error-msg="City is required" value="{{isset($vendor) ? $vendor->city : old('city')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" value="{{isset($vendor) ? $vendor->address : old('address')}}"
                    placeholder="Enter Address" name="address">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Address 2</label>
                    <input type="text" class="form-control" id="address2" value="{{isset($vendor) ? $vendor->address2 : old('address2')}}"
                    placeholder="Enter Address 2" name="address2">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" value="{{isset($vendor) ? $vendor->phone : old('phone')}}"
                    placeholder="Enter Phone Number" name="phone" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" value="{{isset($vendor) ? $vendor->mobile : old('mobile')}}"
                    placeholder="Enter Mobile Number" name="mobile" >
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Photo</label>
                    <input type="hidden" name="image">
                    <input type="file" class="form-control" id="image"
                    name="image" data-validation="mime size"
                    data-validation-allowing="jpg, png"
                    data-validation-max-size="1024kb" value="{{old('image')}}"
                    data-validation-error-msg-required="Please Upload User Image">
                </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>1st Contact Person Name</label>
                    <input type="text" name="firstcontactperson" class="form-control" placeholder="Enter 1st Contact Person Name" value="{{isset($vendor) ? $vendor->firstcontactperson : old('firstcontactperson')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>1st Contact Person Email</label>
                    <input type="text" name="firstemail" class="form-control" placeholder="Enter 1st Contact Person Email" value="{{isset($vendor) ? $vendor->firstemail : old('firstemail')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>1st Contact Person Mobile Number</label>
                    <input type="text" name="firstphone" class="form-control" placeholder="Enter 1st Contact Person Mobile Number" value="{{isset($vendor) ? $vendor->firstphone : old('firstphone')}}">
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label>2nd Contact Person Name</label>
                    <input type="text" name="secondcontactperson" class="form-control" placeholder="Enter 2nd Contact Person Name" value="{{isset($vendor) ? $vendor->secondcontactperson : old('secondcontactperson')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>2nd Contact Person Email</label>
                    <input type="text" name="secondemail" class="form-control" placeholder="Enter 2nd Contact Person Email" value="{{isset($vendor) ? $vendor->secondemail : old('secondemail')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>2nd Contact Person Mobile Number</label>
                    <input type="text" name="secondphone" class="form-control" placeholder="Enter 2nd Contact Person Mobile Number" value="{{isset($vendor) ? $vendor->secondphone : old('secondphone')}}">
                </div>
            </div>

        </div>
                           <!--  <div class="col-md-6">
                                <div class="form-group">

                                    <input type="checkbox" id="Usercheck" name="usercheck"  checked>
                                    <span>Register For User</span>
                                </div>
                            </div> -->





                            <button type="submit" class="btn btn-primary">{{isset($vendor) ? 'Edit' : 'Add New'}} Vendor/Supplier</button>

                            <a href="{{ route('vendor.index') }}" class="btn btn-info">View All</a>

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

    <script src="{{ asset('adminAssets/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('adminAssets/assets/js/jquery.sweet-alert.custom.js') }}"></script>
    <script type="text/javascript">
        @if(session('flash_message'))
        swal("Success!", "{!! session('flash_message') !!}", "success")
        @endif

        @if(session('flash_error'))
        swal("Error", "{!! session('flash_error') !!}")
        @endif
    </script>

    <script>
   



        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: 'Please Select Service'
            });


        });
    </script>
    @endsection
