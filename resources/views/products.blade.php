@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach(Config::get('config.products') as $name=>$value)
                <div class="col-md-4">
                    <div class="thumbnail product-group-block">
                        <a href="{{url('product', $name)}}">
                            <div class="product-img-title">{{$name}}</div>
                            <div class="product-img"><img src="{{url($value['image'])}}"></div>
                        </a>
                        <br>
                        <ul style="height:200px;">
				            @foreach(Config::get('config.products')[$name]['items'] as $name=>$value)
				            	<li><a href="{{'#'.$name}}">{{$name}}</a></li>
				            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <hr>
	<div class="row">
        <div class="col-md-8">
	        @foreach(Config::get('config.products') as $group=>$grp)
	            @foreach(Config::get('config.products')[$group]['items'] as $name=>$value)
	                <?php
	                    $obj = Config::get('config.products')[$group]['items'][$name];
	                    $tag = $name;
	                ?>
	                <a name="{{$tag}}"></a>
	                @include('item')
	            @endforeach
			@endforeach
        </div>
        <div class="col-md-4">
            @include ('contact_form')
        </div>
    </div>
</div>

@endsection
