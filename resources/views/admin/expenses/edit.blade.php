@extends('admin.layouts.admin_design')
@section('title')  Add New Expenses Category @endsection
@section('content')

   <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Expenses</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Expenses Category</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New Expenses</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="{{route('expenses.update',$expenses->id)}}" enctype="multipart/form-data">
                            @csrf



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Date</label>
                                            <input type="date" class="form-control" id="date" value="{{$expenses->date}}"
                                                    name="date" data-validation="length"
                                                   data-validation-length="3-400" 
                                                   data-validation-error-msg="Service Name is required (3-50 chars)">
                                        </div>
                                    </div>                               
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Particular</label>
                                            <input type="text" class="form-control" placeholder="Enter particular" id="particular" value="{{$expenses->particular}}"
                                                    name="particular" data-validation="length"
                                                   data-validation-length="3-400" 
                                                   data-validation-error-msg="Service Name is required (3-50 chars)">
                                        </div>
                                    </div>                               
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Amount</label>
                                            <input type="number" class="form-control" placeholder="Enter Amount" id="Amount" value="{{$expenses->amount}}"
                                                    name="amount" data-validation="length"
                                                   data-validation-length="2-400" 
                                                   data-validation-error-msg="Amount is required (2-50 chars)">
                                        </div>
                                    </div>                               
                                </div>

                                
                                <div class="col-md-12">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Category ID</label>
                                    <select name="category_id" id="category_id" class="form-control" data-validation="required" value=""
                                            data-validation-error-msg="Select Category ID">
                                       
                                         <option value="{{ $expenses->category_id}}" selected hidden>{{ $expenses->category_id}}</option>
                                        <option value="category_i">Category 1</option>
                                        <option value="category_ii">Category 2</option>
                                        <option value="category_iii">Category 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                   
                   <div class="col-md-12">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Mode of Payment</label>
                                    <select name="payment" id="payment" class="form-control" data-validation="required" value=""
                                            data-validation-error-msg="Select Mode of payment">
                                       <option value="{{ $expenses->payment}}" selected hidden>{{ $expenses->payment}}</option>
                                        <option value="Eswa">Eswa </option>
                                        <option value="khalti">Khalti</option>
                                        <option value="bank">Bank</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Paid By</label>
                                            <input type="text" class="form-control" placeholder="Enter Paid By" id="paid_by" value="{{$expenses->paid_by}}"
                                                    name="paid_by" data-validation="length"
                                                   data-validation-length="3-400" 
                                                   data-validation-error-msg="Paid By is required (3-50 chars)">
                                        </div>
                                    </div>                               
                                </div>

                                <div class="col-md-12">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Expenditure Status</label>
                                    <select name="expenditure" id="expenditure" class="form-control" data-validation="required" value=""
                                            data-validation-error-msg="Select expenditure">
                                          <option value="{{ $expenses->expenditure}}" selected hidden>{{ $expenses->expenditure}}</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Received By</label>
                                            <input type="text" class="form-control" placeholder="Enter Received By" id="received_by" value="{{$expenses->received_by}}"
                                                    name="received_by" data-validation="length"
                                                   data-validation-length="3-400" 
                                                   data-validation-error-msg="Received By is required (3-50 chars)">
                                        </div>
                                    </div>                               
                                </div>

                    </div>




                                <!-- <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description"> Particular </label>
                                            <textarea name="particular" id="particular" cols="30" rows="10" class="form-control" placeholder="Enter Expenses Particular"
                                            data-validation="length"
                                                   data-validation-length="3-400" 
                                                   data-validation-error-msg="Particular is required (3-50 chars)"></textarea>
                                        </div>
                                    </div> 
                                    </div> -->

<!--                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="status" id="status" value="1" checked>
                                            <label for="status">Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
 -->

                           <button  type="submit" class="btn btn-primary">Update</button>

                            <a href="{{route('expenses.view')}}" class="btn btn-danger">Go Back</a>

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



    
@endsection