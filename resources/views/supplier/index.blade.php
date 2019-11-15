@extends('supplier.layout.dashboard')

@section('css')
    <style>
        tr.supplier {
            cursor: pointer;
        }

        tr.active, tr.supplier:hover {
            background: #0D5007;
            color: white;
        }

        .suppliers-list {
            height: 500px;
            overflow: scroll;
        }
    </style>
@endsection

@section('content')
    <div class="header bg-gradient-logo-color pb-8 pt-5 pt-md-8">
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="mb-0">Suppliers</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="card shadow">
                                    <div class="table-responsive suppliers-list">
                                        <table class="table" #id="suppliers">
                                            <thead class="table-light table-flush">
                                                <tr class="text-center">
                                                    <th scope="col">List of Suppliers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($suppliers as $supplier)
                                                    <tr class="supplier" data-id="{{ $supplier->supplier_id }}">
                                                        <td>
                                                            <div class="row">
                                                                <div class="col">
                                                                    {{ $supplier->name }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="mb-0">Supplier Info</h4>
                                            </div>
                                            <div class="col text-right">
                                                <button class="btn btn-sm btn-success">Edit</button>
                                                <button class="btn btn-sm btn-danger">Disable</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table align-items-center table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="col">
                                                            <h5 class="mb-0">Name: </h5>
                                                        </th>
                                                        <td>
                                                            <input class="form-control" type="text" name="supplier-name" id="supplierName" value="" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Email: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-email" id="supplierEmail" class="form-control" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Landline: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-landline" id="supplierLandline" class="form-control" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Fax: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-fax" id="supplierFax" class="form-control" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Mobile: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-mobile" id="supplierMobile" class="form-control" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Company Address: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-company-address" id="supplierCompanyAddress" class="form-control" value="" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Billing Address: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-billing-address" id="supplierBillingAddress" class="form-control" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Type: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-type" id="supplierType" class="form-control" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 class="mb-0">Remarks: </h5>
                                                        </th>
                                                        <td>
                                                            <input type="text" name="supplier-remarks" id="supplierRemarks" class="form-control" disabled>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header">
                                        <h4 class="mb-0">
                                            Contact Persons
                                        </h4>
                                        <div class="card-body" id="contacts">
                                            
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
@stop

@section('js')
    <script>
        $('#add-supplier').on('click', function() {
            alert('test'); 
        });

        $(document).on('click', 'tr.supplier', function() {
            var selected = $(this).hasClass('active');

            $('tr.supplier').removeClass('active');

            if(!selected)
                $(this).addClass('active');
            
            let id = $(this).data('id');

            getSupplier(id);
        });

        function getSupplier(supplier) {
            $.ajax({
                url: '/suppliers/' + supplier,
                type: 'GET',
                success: function(data) {
                    $('#supplierName').val(data.name);
                    $('#supplierEmail').val(data.email);
                    $('#supplierLandline').val(data.landline);
                    $('#supplierFax').val(data.fax);
                    $('#supplierMobile').val(data.mobile);
                    $('#supplierCompanyAddress').val(data.company_address);
                    $('#supplierBillingAddress').val(data.billing_address);
                    $('#supplierType').val(data.supplier_type);
                    $('#supplierRemarks').val(data.remarks);

                    let contacts = '';

                    $('#contacts').empty();

                    data.contacts.forEach(contact => {
                        contacts += '<div class="card shadow">' +
                            '<div class="card-header">' +
                                '<h3 class="mb-0">'+ contact.name +'</h3>' +
                            '</div>' +
                            '<div class="card-body">' +
                                '<div class="table-responsive">' +
                                    '<table class="table">' +
                                        '<tbody>' +
                                            '<tr>' +
                                                '<th>Mobile: </th>' +
                                                '<td>' + contact.mobile + '</td>' +
                                            '</tr>' +
                                            '<tr>' +
                                                '<th>Landline: </th>' +
                                                '<td>' + contact.landline  + '</td>' +
                                            '</tr>' +
                                            '<tr>' +
                                                '<th>Email: </th>' +
                                                '<td>'+ contact.email +'</td>' +
                                            '</tr>' +
                                            '<tr>' +
                                                '<th>Fax: </th>' +
                                                '<td>'+ contact.fax +'</td>' +
                                            '</tr>' +
                                        '</tbody>' +
                                    '</table>' +
                                '</div>' +
                            '</div>' +
                        '</div>'
                    });

                    $('#contacts').append(contacts);
                },
                eeror: function(error) {
                    alert('Opps! Something went wrong please refresh the website');
                }
            });
        }
    </script>
@stop