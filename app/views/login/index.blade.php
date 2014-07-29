@include('global/css')

<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Inkings Login Page</h3>
					</div>
						{{ HTML::ul($errors->all()) }}
					{{ Form::open(array('url' => 'login')) }}
					    <div class="form-group">
					      {{ Form::label('email', 'Email') }}
					      {{ Form::email('user_email', Input::old('email'), array('class' => 'form-control')) }}
					    </div>

					    <div class="form-group">
					      {{ Form::label('user_password', 'Password') }}
					      {{ Form::password('user_password', array('class' => 'form-control')) }}
					    </div>

					    {{ Form::submit('Login ', array('class' => 'btn btn-primary')) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>