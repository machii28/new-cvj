
@extends('layouts.app')

@section('content')
@include('layouts.headers.inventoryCard1')
<div class="container-fluid mt--7">
	<div class="card-body">
		<div class="col-xl-8 mb-5 mb-xl-0">
				<div class="card shadow">
						<div class="card-header border-0">
								<div class="row align-items-center">
									<div class="col">
										<h3 class="mb-0">Add Inventory Form</h3>
									</div>
								</div>
						</div>
						<div class="card-body border-0">
		{!! Form::open(['action' => 'InventoryController@store', 'method' => 'POST']) !!}
			<div class="row">
				<div class="col-md-12 mb-3">
					<label class="form-label">Item Name</label>
					{{ Form::text('itemName', '',['class' => 'form-control', 'placeholder' => 'Item Name'] )}}
				</div>
				
				<div class="col-md-12 mb-3">
						<label class="form-label">Category</label>
						<select id="category" name="category" class="form-control" placeholder="Category" required>
								<option>-</option>
								@foreach ($categories as $category)
									<option value="{{ $category->id }}">{{ $category->categoryName }}</option>
								@endforeach             
						</select>
				</div>
				<div class="col-md-12 mb-3">
					<label class="form-label">Quantity</label>
					{{ Form::number('quantity', '',['class' => 'form-control', 'placeholder' => 'Quantity'] )}}
				</div>
				<div class="col-md-12 mb-3">
						{{ Form::submit('Add Item', ['class' => 'btn btn-success']) }}
				</div>
			</div>
								</div>
						
		{!! Form::close() !!}
		</div>
		</div>
	</div>
</div>
@endsection