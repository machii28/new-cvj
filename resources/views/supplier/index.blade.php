@extends('supplier.layout.dashboard')

@section('content')
    <div class="header bg-gradient-logo-color pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Suppliers</h5>
                                        <span class="h2 font-weight-bold mb-0">5</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-chart-bar"></i>
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
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">List of Suppliers</h3>
                            </div>
                            <div class="col text-right">
                                <button id="add-supplier" class="btn btn-sm btn-success">Add New Supplier</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Supplier</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Mobile Number</th>
                                    <th>Office Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <th>{{ $supplier->supplier_id }}</th>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td>{{ $supplier->contactMobNo }}</td>
                                        <td>{{ $supplier->officeTelNo }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-success">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
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

    
@stop

@section('js')
    <script>
        $('#add-supplier').on('click', function() {
            alert('test'); 
        });
    </script>
@stop