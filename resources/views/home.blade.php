@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img id="home-img" class="thumbnail" width="100%">
            <div id="home-img-text" class="home-img-overlay"></div>
            <div class="home-text product-group-block">
                <div class="well">
                    <div class="home-text-title">
                        <h3>CANADIAN MADE OILFIELD DRILLING TECHNOLOGY</h3>
                        <strong>When there's no margin for error and so much at stake, Alert Systems insures everything goes right.</strong><br>
                        View our <a href="{{url('products')}}">PRODUCTS</a> and <a href="{{url('contact')}}">CONTACT</a> us to get started on your rig refurbishment or upgrade needs.
                    </div>
                    <br>
                    <div>
                        Alert Systems International, Inc. is a leading global provider of advanced safety systems and telemetry solutions for drilling and service rigs. We offer a wide range of control products, electrical services, and custom mechanical fabrication services. Headquartered in Edmonton, Alberta with global sales, support and manufacturing operations in Boston and Dubai.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <hr><br>
            @foreach(Config::get('config.products') as $name=>$value)
                <div class="col-md-4">
                    <div class="thumbnail product-group-block">
                        <a href="{{url('product', $name)}}">
                            <div class="product-img-title">{{$name}}</div>
                            <div class="product-img"><img src="{{url($value['image'])}}"></div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $fileslist_temp = 
    <?php
        $dir = ('./img/display');
        $array_of_files_temp = preg_grep('/^([^.])/', scandir($dir));;
        $array_of_files= implode("\n", $array_of_files_temp);
        $array_of_files_temp = json_encode($array_of_files);
        echo ($array_of_files_temp);
    ?>;
</script>
<script src="{{ url('js/home.js') }}"></script>
@endsection
