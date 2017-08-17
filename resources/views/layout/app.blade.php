<!DOCTYPE html>
<html>
<head>
	<title>Shopper</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

<div class="wrapper">
	<div class="container-fluid">
		<!-- My Navigation starts here -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">Shopper</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="{{ Request::segment(1) === 'home' ? 'active' : null }}"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
              <li class="{{ Request::segment(1) === 'shop' ? 'active' : null }}"><a href="/shop">Shop</a></li>
            </ul>
            <!-- Search Form -->
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Search</button>
            </form>
            <!-- Right side of the menu -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart 
              @if(count($vim)>0)
                <span class="badge">{{count($vim)}}</span>
              @else
                <span class="badge">0</span>
              @endif
              </a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!-- my Navigation bar ends here -->

      <!-- Cart That is hidden and will appear when clicked on the cart icon -->
      <div class="containee">
        <div class="shopping-cart">
          <div class="shopping-cart-header">
            <i class="fa fa-shopping-cart cart-icon"></i>
            @if(count($vim)>0)
                <span class="badge">{{count($vim)}}</span>
              @else
                <span class="badge">0</span>
              @endif
            <div class="shopping-cart-total">
              <span class="lighter-text">Total:</span>
              <span class="main-color-text">${{Cart::total()}}</span>
            </div>
          </div> <!--end shopping-cart-header -->

          <ul class="shopping-cart-items">
            @foreach($vim as $row)
              <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                <span class="item-name">{{$row->name}}</span>
                <span class="item-price">{{$row->price}}</span>
                <span class="item-quantity">quantity {{$row->qty}}</span><br>
                <span class="item-price">Total: ${{$row->total}}</span>
                <form action="/cart/remove" method="post">
                  <input type="hidden" name="id" value="{{{ $row->rowId }}}">
                  <button class="btn btn-primary">Remove</button>
                </form>
              </li>
            @endforeach
          <span class="main-color-text">SubTotal: ${{Cart::subtotal()}}</span><br>
          <span class="main-color-text">Tax: ${{Cart::tax()}}</span><br>
          <span class="main-color-text">Total: {{Cart::total()}}</span>
          <a href="#" class="button">Checkout</a>
        </div> <!--end shopping-cart -->
      </div> <!--end container -->
    
    <!-- Content From other pages -->
		@yield('content')

	</div>
</div>

<!-- Scripts -->
<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Cart Show/Hide Script -->
<script>
(function(){
  $(".shopping-cart").hide();
  $("#cart").on("click", function() {
    $(".shopping-cart").fadeToggle( "fast");
  });
})();
</script>
</body>
</html>