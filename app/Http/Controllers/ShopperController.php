<?php

namespace App\Http\Controllers;
use Cart;
use App\shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ShopperController extends Controller
{
	public $price;
	public $product_id;
	public $product_name;
	public $quantity;

	public function __construct()
	{
		$this->product_id = Input::get('product_id');
		$this->product_name = Input::get('product_name');
		$this->quantity = Input::get('quantity');
		$this->price = Input::get('price');
	}
	
	//Default page
    public function index()
    {
    	$vim = Cart::content();
    	return view('shopper',['vim'=>$vim]);
    }
    // GEt the products in the cart
    public function get()
    {
        $vim = Cart::content();
    	return view('shop',['vim'=>$vim]);
    }
    //Add a product
    public function add()
    {
    	$cart = Cart::add($this->product_id,$this->product_name, $this->quantity, $this->price);
    	return redirect()->back();
    }
    //Update cart
    public function update(){}
    //Remove item from cart
    public function remove()
    {
    	$rowId = Input::get('id');
		Cart::remove($rowId);
		return redirect()->back();
    }
    //Delete a product
    public function destroy(){}
    //Categories
    public function category()
    {
        //This is where the categories will be handled
    }
    //Checkout
    public function checkout()
    {
        //My checkout controller method
    }
}
