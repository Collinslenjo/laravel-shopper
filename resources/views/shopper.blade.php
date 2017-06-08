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




@if(count($vim)>0)


<div class="row">
	<div class="col-md-6 col-md-offset-3">
			<h3>MY PRODUCTS</h3>
		</div>
		<div class="col-md-12">
			// Display the content in a View.
<table>
   	<thead>
       	<tr>
           	<th>Product</th>
           	<th>Qty</th>
           	<th>Price</th>
           	<th>Subtotal</th>
       	</tr>
   	</thead>

   	<tbody>

   		<?php foreach($vim as $row) :?>

       		<tr>
           		<td>
               		<p><strong><?php echo $row->name; ?></strong></p>
               		<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
           		</td>
           		<td><input type="text" value="<?php echo $row->qty; ?>"></td>
           		<td>$<?php echo $row->price; ?></td>
           		<td>$<?php echo $row->total; ?></td>
           		<td><form action="/cart/remove" method="post">
    <input type="hidden" name="id" value="{{{ $row->rowId }}}">
	<button class="btn btn-primary">Remove</button>
</form>
</td>
       		</tr>

	   	<?php endforeach;?>

   	</tbody>
   	
   	<tfoot>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Subtotal</td>
   			<td><?php echo Cart::subtotal(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Tax</td>
   			<td><?php echo Cart::tax(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Total</td>
   			<td><?php echo Cart::total(); ?></td>
   		</tr>

   	</tfoot>
</table>
		</div>
	</div>
</div>

@else
@endif


@endsection