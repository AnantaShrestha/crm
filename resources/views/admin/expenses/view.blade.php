@extends('admin.layouts.admin_design')

@section('title')  View All Expenses @endsection

@section('content')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Expenses List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="javascript:"> Expenses </a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View All Expenses </li>
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
                                            <header>All  List</header>

                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="{{route('expenses.create')}}" id="addRow"
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
                                                        <th> SN </th>
                                                        <th>  Date </th>
                                                        <th> Particular </th>
                                                        <th> Amount </th>
                                                        <th> Category ID </th>
                                                        <th> Mode of payment </th>
                                                        <th> Paid By</th>
                                                        <th>Expenditure Status</th>
                                                        <th>Received By</th>
                                                        <th> Action </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($expenses as $key=>$expensess)
                                                        <tr>
                                                   <td>{{$key+1}}</td>
                                                   <td>{{$expensess->date}}</td>
                                                   <td>{{$expensess->particular}}</td>
                                                   <td>{{$expensess->amount}}</td> 
                                                   <td>{{@$expensess->expensescategory->name}}</td>
                                                   <td>{{$expensess->payment}}</td> 
                                                   <td>{{$expensess->paid_by}}</td>
                                                   <td>{{$expensess->expenditure}}</td>
                                                   <td>{{$expensess->received_by}}</td>
                                                   <td>
                                                    <a href="{{route('expenses.edit',$expensess->id)}}" class="btn btn-success btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                                </a>
                                                            
                                                   
                                                     <a href="javascript:" rel="{{$expensess->id}}" rel1="Expenses/Delete" class="btn btn-danger btn-xs deleteRecord" >
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                        
                                                </td>




                                                            	<!-- <a href="" class="btn btn-primary">
                                                            	<i class="fa fa-eye"></i>
                                                                View</a> -->
                                                            
                                                
                                                        
                                                           </td>
                                                                                                                                 
                                                           @endforeach
                                                        </tr>
                                                
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