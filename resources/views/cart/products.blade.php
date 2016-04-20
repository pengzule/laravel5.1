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

@section('my-js')
<script type="text/javascript">
  var bullets = document.getElementById('position').getElementsByTagName('li');
  Swipe(document.getElementById('mySwipe'), {
    auto: 2000,
    continuous: true,
    disableScroll: false,
    callback: function(pos) {
      var i = bullets.length;
      while (i--) {
        bullets[i].className = '';
      }
      bullets[pos].className = 'cur';
    }
  });

  function _addCart() {
    var product_id = "{{$product->id}}";
    $.ajax({
      type: "GET",
      url: '/service/cart/add/' + product_id,
      dataType: 'json',
      cache: false,
      success: function(data) {
        if(data == null) {
          $('.bk_toptips').show();
          $('.bk_toptips span').html('服务端错误');
          setTimeout(function() {$('.bk_toptips').hide();}, 2000);
          return;
        }
        if(data.status != 0) {
          $('.bk_toptips').show();
          $('.bk_toptips span').html(data.message);
          setTimeout(function() {$('.bk_toptips').hide();}, 2000);
          return;
        }

        var num = $('#cart_num').html();
        if(num == '') num = 0;
        $('#cart_num').html(Number(num) + 1);

      },
      error: function(xhr, status, error) {
        console.log(xhr);
        console.log(status);
        console.log(error);
      }
    });
  }

  function _toCart() {
    location.href = '/cart';
  }
</script>


@endsection
