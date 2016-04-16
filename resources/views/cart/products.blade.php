@extends('_layouts.default')

@section('content')
<div id="title" style="text-align: center;">

		<div class="showbox">
			<div class="imagebox">
				<a href="#"><img src="/images/3.jpg" alt="3.jpg"></a>
				<a href="#11"><img src="/images/4.jpg" alt="4.jpg"></a>
				<a href="#"><img src="/images/5.jpg" alt="5.jpg"></a>
				<a href="#"><img src="/images/6.jpg" alt="6.jpg"></a>
			</div>
			<div class="icobox">
				<span rel="0" class="active">0</span>
				<span rel="1">1</span>
				<span rel="2">2</span>
				<span rel="3">3</span>
			</div>
		</div>


	</div>
<hr>
<div class="row">

	@foreach ($products as $product)
		
	<div class="col-3 col-sm-3 col-lg-3">

		<div class="thumbnail">

			<div class="caption ">
				<a href="{{ URL('products/'.$product->id) }}"><img  src="/images/2.jpg"></a>
				<hr>
				<a  style="color: black;"  href="{{ URL('products/'.$product->id) }}">	<p >金钱猫EOC终端猫MT706 广电猫 Modem EOC四口终端设备</p></a>
				<p> ¥ {{ $product->price }}</p>
				<p>
					
					
					<a class="btn btn-info btn-sm btn-add" href="#">Add Cart</a>
					

					{{-- Add to wishlist button --}}
					<span class="pull-right">
						{{-- Check if the product is on the wishlist already --}}
						
							<a class="btn btn-xs tip wishlist-add" href="#" title="Add to Wishlist"><i class="fa fa-star-o fa-lg"></i></a>
						
					</span>
				</p>

			</div>

		</div>

	</div>
	
	@endforeach

</div>

{!! $products->render() !!}

@stop
