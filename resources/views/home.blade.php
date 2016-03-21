@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img class="thumbnail" src="{{url('img/home.jpg')}}" width="100%">
            <!-- <h3>Alert Systems International Inc. manufactures technologically advanced anti-collision safety and telemetry solutions for the oil and gas industry. Our products are specifically designed and constructed for the world's most demanding and hostile environments with no margin of error. We supply a wide range of safety systems for well servicing, work-over, and drilling rigs.</h3> -->
            <div class="home-img-overlay">
                Safety and Efficiency<br>
                Keep us moving forward.
            </div>
            <div class="home-img-subtext">
                <h3>CANADIAN MADE OILFIELD DRILLING TECHNOLOGY</h3>
                <strong>When there's no margin for error and so much at stake, Alert Systems insures everything goes right.</strong><br><br>
                We supply a wide range of advanced safety systems and telemetry solutions for well service and drilling rigs. View our <a href="{{url('products')}}">PRODUCTS</a> and <a href="{{url('contact')}}">CONTACT</a> us today to get started on your rig refurbishment or upgrade needs.
            </div>
            
        </div>
    </div>
    
    <div class="row home-adjust-position">
        <div class="col-md-10 col-md-offset-1">
            @foreach(Config::get('config.products') as $name=>$value)
                <div class="col-md-4">
                    <div class="thumbnail product-group-block">
                        <a href="{{url('product', $name)}}">
                            <div class="product-img-title">{{$name}}</div>
                            <img src="{{url($value['image'])}}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
