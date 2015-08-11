@extends('layout.master')
@section('contents')
	<div class="jumbo-header">
		<div class="jumbotron" align="center">
			<h2>Sysad Asset Inventory System</h2>
			<p>Helping HPO Outsourcing Inc.</p>
			<a href="#" class="btn btn-primary">Learn More</a>
		</div>
	</div>
	<!-- Login Form -->
	<div class="login-container">
        <div id="output"></div>
            <div class="jumbotron" align="center">
            	<h3>Login</h3>
            	<div class="form-group">
                	{!! Form::open() !!}
                    	{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}<br>
						{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
						<a href="{{ action('DashController@pincode') }}" class="btn btn-primary">Register</a>
                	{!! Form::close() !!}
            	</div>
        	</div>
       	</div>
    </div>
    <!-- end login form -->
	<!-- Navigation Tabs -->
    
    <!-- end navigation tabs -->
	<!-- 
	{!! Form::open() !!}
		<div class="form-group">
			<div class="col-sm-8">
				{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}<br>
				{!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
				<a href="" class="btn btn-primary">Register</a>
			</div>
			
		</div>
	{!! Form::close() !!} -->



@endsection