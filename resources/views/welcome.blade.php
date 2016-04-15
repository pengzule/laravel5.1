@extends('_layouts.default')
@section('content')
	<div id="content">
        <div id="title" style="text-align: center;">
		<h1>Learn Laravel 5</h1>
		<div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
		<table>
  
    <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Item Price</th>
            <th>Subtotal</th>
        </tr>
    </thead>

    <tbody>

   

        <tr>
            <td>
                <p><strong><?php echo $row->name;?></strong></p>
                <p><?php echo ($row->options->has('size') ? $row->options->size : '');?></p>
            </td>
            <td><input type="text" value="<?php echo $row->qty;?>"></td>
            <td>$<?php echo $row->price;?></td>
            <td>$<?php echo $row->subtotal;?></td>
       </tr>

   
    </tbody>
</table>
	</div>
        </div>
@endsection
