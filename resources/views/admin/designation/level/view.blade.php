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
                <div class="page-title">Add New Level </div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="javascript:">Level</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                                                    <a href="{{ route('add_level') }}" id="addRow" class="btn btn-info" style="margin-right: 10px;">
                                                        Add New <i class="fa fa-plus"></i>
                                                    </a>



                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="table-scrollable">
                                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                                <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th> Level </th>
                                                        
                                                        <th>Job Description</th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $levels)
                                                    <tr class="odd gradeX">
                                                        <td class="left"> {{$levels->id}}</td>
                                                        <td>{{$levels->level}}</td>
                                                        
                                                        <td>{{$levels->level_description}}</td>
                                                        <td>
                                                            </a>
                                                            <a href="{{ route('edit_levels',$levels->id) }} " class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="javascript:" rel="{{$levels->id}}" rel1="level/delete" class="btn btn-danger btn-xs deleteRecord">
                                                                <i class="fa fa-trash-o "></i>
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