@extends('_layouts.default')
@section('content')
	<div id="content">
        <div id="title" style="text-align: center;">
		<h1>Learn Laravel 5</h1>
		<div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
	</div>
        </div>
@endsection
