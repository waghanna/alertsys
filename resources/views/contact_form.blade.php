
<div class="panel panel-success">

	<div class="panel-heading text-center">
		<h4><strong>Request a Quote or Send an Inquiry</strong></h4>
	</div>

	<div class="panel-body">
		@if (Session::has('success'))
		    <div class="alert alert-success"><em>{{Session::get('success')}}</em></div>
		@endif
		@if(isset($errors))
			@if($errors->any())
				<ul style="list-style-type:none" class="alert alert-danger">
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			@endif
		@endif
		{!! Form::open(['url' => 'contact_form', 'class' => 'form']) !!}
		
		{!! Form::hidden('location', null, ['id'=>'location']) !!}

		{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
		{!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

		{!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
		{!! Form::text('email', old('email'), ['class' => 'form-control']) !!}

		{!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
		{!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}

		{!! Form::label('company', 'Company:', ['class' => 'control-label']) !!}
		{!! Form::text('company', old('company'), ['class' => 'form-control']) !!}

		{!! Form::label('message', 'Message:', ['class' => 'control-label']) !!}
		{!! Form::textarea('message', old('message'), ['rows'=>4, 'class' => 'form-control']) !!}
		<br>
		<div class="col-md-8 col-md-offset-2">
			{!! Form::submit('Send Message', ['class' => 'btn btn-success form-control']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>