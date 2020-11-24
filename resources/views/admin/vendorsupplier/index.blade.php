@extends('admin.layouts.admin_design')

@section('title')
@if(!empty($trashed))
View All Trashed Vendor/Supplier
@else
View All Vendor/Supplier 
@endif
@endsection

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">
                    @if(!empty($trashed))
                    Trashed Vendor/Supplier List
                    @else
                    All Vendor/Supplier List
                    @endif

                </div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                   href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li><a class="parent-item" href="javascript:">Customer</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">

                @if(!empty($trashed))
                Trashed Vendor/Supplier List
                @else
                View All Vendor/Supplier
            @endif</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line">

            <div class="tab-content">
                <div class="tab-pane active fontawesome-demo" id="tab1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>

                                        @if(!empty($trashed))
                                        All Trashed Customers List
                                        @else
                                        All Vendor/Supplier List
                                        @endif
                                    </header>

                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a href="{{route('vendor.create')}}" id="addRow"
                                                class="btn btn-info" style="margin-right: 10px;">
                                                Add New  <i class="fa fa-plus"></i>
                                            </a>


                                            @if(!empty($trashed))
                                            <a href="{{ route('viewStudent') }}" id="addRow"
                                            class="btn btn-warning">
                                            View Vendor/Supplier  <i class="fa fa-eye"></i>
                                        </a>
                                        @else
                                        <a href="{{ route('vendor.viewtrash') }}" id="addRow"
                                        class="btn btn-warning">
                                        Trashed Vendor/Supplier  <i class="fa fa-eye"></i>
                                    </a>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group pull-right">
                                    <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                    data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="">
                                            <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-file-pdf-o"></i> Save as
                                            PDF </a>
                                        </li>
                                        <!--<li>-->
                                            <!--    <a href="javascript:;">-->
                                                <!--        <i class="fa fa-file-excel-o"></i>-->
                                                <!--        Export to Excel </a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-scrollable">
                                    <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                    id="example4">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> </th>
                                            <th> First Name </th>
                                            <th> Last Name </th>
                                            <th> Vendor's Email </th>
                                            <th> Phone </th>
                                            <th> Address </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            @foreach($vendors as $vendor)
                                                <tr>
                                                    <td>{{$loop->index +1}}</td>
                                                     <td class="patient-img">  @if(!empty($vendor->image))
                                                        <img src="{{ asset('uploads/upload/'.$vendor->image) }}"
                                                        alt="{{ $vendor->fname }} {{ $vendor->lname }}">
                                                        @else
                                                        <img src="{{ asset('uploads/profile/profile.png') }}"
                                                        alt="{{ $vendor->fname }} {{ $vendor->lname }}">
                                                    @endif</td>
                                                    <td>{{$vendor->fname}}</td>
                                                    <td>{{$vendor->lname}}</td>
                                                    <td>{{$vendor->email}}</td>
                                                    <td>{{$vendor->phone}}</td>
                                                    <td>{{$vendor->address}}</td>
                                                    <td>
                                                        @if(!empty($trashed))
                                                             <a href="{{route('vendor.restore',$vendor->id)}}"
                                                                 class="btn btn-primary btn-xs">
                                                                 <i class="fa fa-undo"></i>
                                                             </a>


                                                             <a href="javascript:" rel="{{$vendor->id}}" rel1="vendor/delete" class="btn btn-danger btn-xs deleteRecord">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>


                                                        @else
                                                        <a href="{{ route('vendor.edit',$vendor->id) }}"
                                                         class="btn btn-primary btn-xs">
                                                         <i class="fa fa-pencil"></i>
                                                        </a>
                                                    <button href="javascript:" rel="{{ $vendor->id }}" rel1="vendor/trash" class="btn btn-danger btn-xs deleteRecord" >
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                    @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>

@endsection

@section('css')
<!-- data tables -->
<link href="{{ asset('adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<!-- data tables -->
<script src="{{ asset('adminAssets/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminAssets/assets/js/pages/table/table_data.js') }}"></script>
@endsection
