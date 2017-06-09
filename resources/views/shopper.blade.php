@extends('layout.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
			<div class="panel-body">
				<form method="post" action="/cart/add">
					<input class="form-control" type="text" name="product_id" value="293ad"><br>
					<label>Product Name</label><br>
					<input class="form-control" type="text" name="product_name" value="Zuri Animation"><br>
					<label>Amount</label><br>
					<input class="form-control" type="number" name="quantity" value="2"><br>
					<label>Price</label><br>
					<input class="form-control" type="tel" name="price" value="2000"><br>
					<button class="btn btn-primary" type="submit" name="collo">Add to cart</button>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection