@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach(Config::get('config.products')[$group]['items'] as $name=>$value)
                <div class="col-md-4">
                    <div class="thumbnail product-group-block">
                        <a href="{{'#'.$name}}">
                            <div class="product-img-title">{{$name}}</div>
                            <img src="{{url($value['image'])}}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8">
            @foreach(Config::get('config.products')[$group]['items'] as $name=>$value)
                <?php
                    $obj = Config::get('config.products')[$group]['items'][$name];
                    $tag = $name;
                ?>
                <a name="{{$tag}}"></a>
                @include('item')
            @endforeach
        </div>
        <div class="col-md-4">
            @include ('contact_form')
        </div>
    </div>
</div>

@endsection
