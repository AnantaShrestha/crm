@extends('admin.layouts.admin_design')

@section('title')  Add New Income @endsection

@section('content')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Income</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Income</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New Income Details</header>
                    </div>
                    <div class="card-body " id="bar-parent">
                    <form method="post" action="{{route('income.incomes.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Paid By</label>
                                            <input type="text" class="form-control" id="paidby"
                                                   placeholder="Enter name of Paid By" name="paidby" data-validation="length"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Income Category Name is required (3-50 chars)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Amount</label>
                                            <input type="text" class="form-control" id="amount"
                                                   placeholder="Enter a Amount" name="amount" data-validation="length"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Income Category Name is required (3-50 chars)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Date</label>
                                            <input type="date" class="form-control" id="date"
                                                   placeholder="Enter a mount" name="date" data-validation="length"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Income Category Name is required (3-50 chars)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Income Category</label>
                                            <select name="incomecategoryid" id="incomecategoryid" class="form-control">
                                                <option value="select a category">Select a Category</option>
                                                @foreach($category as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Received By</label>
                                            <input type="text" class="form-control" id="receivedby"
                                                   placeholder="Enter a name of Received By " name="receivedby" data-validation="length"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Income Category Name is required (3-50 chars)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Mode of Payment</label>
                                            <input type="text" class="form-control" id="modeofpayment"
                                                   placeholder="Enter a mode of payment" name="modeofpayment" data-validation="length"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Income Category Name is required (3-50 chars)">
                                        </div>
                                    </div>
                                </div>                         
                            </div>
                                <button  type="submit" class="btn btn-primary">Add New Income</button>
                                <a href="{{Route('income.incomes.view')}}" class="btn btn-danger">View All</a>
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

@endsection
