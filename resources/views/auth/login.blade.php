@extends('_layouts.default')
@section('title','登录')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">登录</div>
				<div class="panel-body">

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/service/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">账号</label>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="邮箱或手机号" name="username" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">密码</label>
							<div class="col-md-6">
								<input type="password" class="form-control" placeholder="不少于6位" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> 记住我
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" onclick="onLoginClick()">登录</button>
								<a class="btn btn-link" href="{{ url('/password/email') }}">忘记密码?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('my-js')
	<script type="text/javascript">


		$('.bk_validate_code').click(function () {
			$(this).attr('src', '/service/validate_code/create?random=' + Math.random());
		});

		function onLoginClick() {
			// 帐号
			var username = $('input[name=username]').val();
			if(username.length == 0) {
				alert('帐号不能为空');
				return;
			}
			if(username.indexOf('@') == -1) { //手机号
				if(username.length != 11 || username[0] != 1) {
					alert('帐号格式不对!');
					return;
				}
			} else {
				if(username.indexOf('.') == -1) {

					return;
				}
			}
			// 密码
			var password = $('input[name=password]').val();
			if(password.length == 0) {

				alert('密码不能为空!');

				return;
			}
			if(password.length < 6) {

				alert('密码不能少于6位!');

				return;
			}
			// 验证码

		}

	</script>
@endsection
