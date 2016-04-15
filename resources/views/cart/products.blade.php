@extends('_layouts.default')

@section('content')
<div id="title" style="text-align: center;">
		<div class="showbox">
			<div class="imagebox">
				<img src="http://www.itxueyuan.org/uploads/javascript/demo/lunbo/zuoyou_title/images/1.jpg" alt="1.jpg">
				<img src="http://www.itxueyuan.org/uploads/javascript/demo/lunbo/zuoyou_title/images/2.jpg" alt="2.jpg">
				<img src="http://www.itxueyuan.org/uploads/javascript/demo/lunbo/zuoyou_title/images/3.jpg" alt="3.jpg">
				<img src="http://www.itxueyuan.org/uploads/javascript/demo/lunbo/zuoyou_title/images/4.jpg" alt="4.jpg">
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
		
			<div class="caption">
				<a href="#"><img  src="/images/1.jpg"></a>
				<hr>
				<a  href="#">	<h2>{{ $product->name }}</h2></a>
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



@stop
