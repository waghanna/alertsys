<?php
	$panel_style = $style == 'quote' ? 'panel-info' : 'panel-warning';
	$panel_title = $style == 'quote' ? 'Request a Quote or Send an Inquiry' : 'Contact Form';
?>
<div class="panel {{$panel_style}}">

	<div class="panel-heading text-center">
		<h4><strong>{{$panel_title}}</strong></h4>
	</div>

	<div class="panel-body">
		{!! Form::open(['url' => ['contact']]) !!}

		{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}

		{!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}

		{!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
		{!! Form::text('phone', null, ['class' => 'form-control']) !!}

		{!! Form::label('company', 'Company:', ['class' => 'control-label']) !!}
		{!! Form::text('company', null, ['class' => 'form-control']) !!}

		{!! Form::label('Message', 'Message:', ['class' => 'control-label']) !!}
		{!! Form::textarea('Message', null, ['rows'=>4, 'class' => 'form-control']) !!}
		<br>
		<div class="col-md-8 col-md-offset-2">
			<?php
				if ($style == 'contact'){
					echo '<button class = "form-control btn btn-warning">Send Message</button>';
				}
				else{
					echo '<button class = "form-control btn btn-primary">Send Message</button>';
				}
			?>			
		</div>
		{!! Form::close() !!}
	</div>
</div>