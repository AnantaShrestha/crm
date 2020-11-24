@extends('admin.layouts.admin_design')

@section('title')
@if(!empty($trashed))
View All Trashed Customer
@else
View All Customer
@endif
@endsection

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Add New Staff </div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="javascript:">Staff</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">

                </li>
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

                                        </header>

                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="btn-group">
                                                    <a href="{{ route('add_staff') }}" id="addRow" class="btn btn-info" style="margin-right: 10px;">
                                                        Add New <i class="fa fa-plus"></i>
                                                    </a>


                                                    @if(!empty($trashed))
                                                    <a href="{{ route('view_all_staff') }}" id="addRow" class="btn btn-warning">
                                                        View Staff <i class="fa fa-eye"></i>
                                                    </a>
                                                    @else
                                                    <a href="{{ route('viewTrashedStudent') }}" id="addRow" class="btn btn-warning">
                                                        Trashed Staffs <i class="fa fa-eye"></i>
                                                    </a>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="btn-group pull-right">
                                                    <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="{{route('printStudent')}}">
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
                                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th> Name </th>
                                                        <th> Staff ID </th>
                                                        <th> Mobile Number </th>
                                                        <th> Email</th>
                                                        <th> Title </th>
                                                        <th> Department </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $staff)
                                                    <tr class="odd gradeX">

                                                        <td class="patient-img"> @if(!empty($staff->pp_photo))
                                                            <img src="{{ asset('images/staff/'.$staff->pp_photo) }}" alt="{{ $staff->fname }} {{ $staff->lname }}">
                                                            @else
                                                            <img src="{{ asset('upload/profile/profile.png') }}" alt="{{ $staff->fname }} {{ $staff->lname }}">
                                                            @endif
                                                        </td>
                                                        <td>{{$staff->fname}} {{$staff->lname}}</td>
                                                        <td>{{$staff->staffid}}</td>
                                                        <td>{{$staff->mobileno}}</td>
                                                        <td>{{$staff->email}}</td>
                                                        <td>{{$staff->title_id}}</td>
                                                        <td>{{$staff->department_id}}</td>
                                                        <td>
                                                            <a href="" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-undo"></i>
                                                            </a>
                                                            <a href="javascript::" rel="{{$staff->id}}" rel1="Staff/delete" class="btn btn-danger btn-xs deleteRecord">
                                                                <i class="fa fa-trash-o "></i>
                                                            </a>

                                                            <a href="{{ route('edit_staff',$staff->id) }}" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>

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