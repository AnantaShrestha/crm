@extends('admin.layouts.admin_design')

@section('title')  View All Services @endsection

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">All Services List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                 href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
             </li>
             <li><a class="parent-item" href="javascript:">Service</a>&nbsp;<i class="fa fa-angle-right"></i>
             </li>
             <li class="active">View All Services</li>
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
                                    <header>All Services List</header>

                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a href="{{ route('addCourse') }}" id="addRow"
                                                class="btn btn-info" style="margin-right: 10px;">
                                                Add New  <i class="fa fa-plus"></i>
                                            </a>


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
                                            <th> Service Name </th>
                                            <th> Price </th>
                                            <th>Status</th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(Auth::user()->can('admin_staff'))
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>{{ $loop->index +1 }}</td>
                                            <td>{{$course->name}}</td>
                                            <td> Rs. {{ $course->fees }}</td>

                                            <td>
                                                @if($course->status == 1)
                                                <span class="label label-rouded label-menu label-success">Active</span>
                                                @else
                                                <span class="label label-rouded label-menu label-danger">In Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('editCourse', $course->id) }}"
                                                 class="btn btn-primary btn-xs">
                                                 <i class="fa fa-pencil"></i>
                                             </a>
                                                 <button href="javascript:" rel="{{$course->id}}" rel1="delete-course" class="btn btn-danger btn-xs deleteRecord" >
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                        </td>
                                    </tr>
                                    @endforeach

                                    @endif





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
<link href="{{ asset('public/adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<!-- data tables -->
<script src="{{ asset('public/adminAssets/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/adminAssets/assets/js/pages/table/table_data.js') }}"></script>



@endsection
