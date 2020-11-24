@extends('admin.layouts.admin_design')

@section('title')  View All Incomes @endsection
<style>
</style>
@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Income List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="javascript:">Incomes</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View All Incomes</li>
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
                                            <header>All Income List</header>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="{{route('income.incomes.add') }}" id="addRow"
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
                                                        <th>S.N</th>
                                                        <th>Paid By</th>
                                                        <th>Amount</th>
                                                        <th>Date</th>
                                                        <th>Income Category</th>
                                                        <th>Received By</th>
                                                        <th>Mode of Payment</th>
                                                        <th> Action </th>                    
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($incomes as $key=>$income)
                                                        <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$income->paidby}}</td>
                                                        <td>{{$income->amount}}</td>
                                                        <td>{{$income->date}}</td>
                                                        <td>{{$income->incomecategoryid}}</td>
                                                        <td>{{$income->receivedby}}</td>
                                                        <td>{{$income->modeofpayment}}</td>
                                                            <td>
                                                            	<button class="btn btn-success btn-xs">
                                                                <a href="{{route('income.incomes.edit',$income->id)}}">
                                                                <i class="fa fa-pencil"></i></a>
                                                            </button>
                                                        <button href="javascript:" rel="{{$income->id}}" rel1="incomes/Delete" class="btn btn-danger btn-xs deleteRecord">
                                                                <i class="fa fa-trash-o "></i>
                                                            </button>
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