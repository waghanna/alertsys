@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 panel" style="background-color: lightyellow; font-size: 1.5em;">
            <div class="col-md-6">
	        	<h3 style="color:red;font-style:italic">We would be glad to help! Contact us for more product information and a free consultation.</h3>
	        	<hr>
				<label>Phone:</label>
				<p>Edmonton Office: 1-780-299-1174 / 1-780-908-1381</p>
				<p>Boston Office: 1-978-893-6347</p>
				<label>Email:</label><br>
				Sales: {{Html::mailto('sales@alertsystems.ca')}}<br>
				Support: {{Html::mailto('support@alertsystems.ca')}}</p>
	        	<hr>
		        <label>Head Office:</label>
				<p>516 Wiseman Lane NW<br>
				Edmonton, Alberta T6T 1N6</p>
			</div>
            <div class="col-md-6">
            <h3></h3>
	            @include ('contact_form')
            </div>

        </div>
    </div>
</div>

@endsection
