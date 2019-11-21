@extends('supplier.layout.dashboard')

@section('content')
    <div class="header bg-gradient-logo-color pb-8 pt-5 pt-md-8"></div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-0">Purchase Order</h3>
                            </div>
                            <div class="col text-right">
                                <button id="addPurchaseOrder" class="btn btn-sm btn-success">Add New Purchase Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <table class="table" id="purchase-orders">
                                    <thead class="table-light table-flush">
                                        <tr class="text-center">
                                            
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop