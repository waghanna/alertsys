@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img id="home-img" class="thumbnail" width="100%">
            <div id="home-img-text" class="home-img-overlay"></div>
            <div class="home-img-subtext product-group-block">
                <div class="well">
                    <h3>CANADIAN MADE OILFIELD DRILLING TECHNOLOGY</h3>
                    <strong>When there's no margin for error and so much at stake, Alert Systems insures everything goes right.</strong><br>
                    View our <a href="{{url('products')}}">PRODUCTS</a> and <a href="{{url('contact')}}">CONTACT</a> us to get started on your rig refurbishment or upgrade needs.<br><br>
                    <p class="text-left">
                        Alert Systems International, Inc. is a leading global provider of advanced safety systems and telemetry solutions for drilling and service rigs. We offer a wide range of control products, electrical services, and custom mechanical fabrication services. Headquartered in Edmonton, Alberta with global sales, support and manufacturing operations in Boston and Dubai.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row home-adjust-position">
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
<style>
#home-img-text{
    margin: 30px;
}
</style>
@endsection

@section('script')
<script type="text/javascript">
    var $fileslist = [];
    $fileslist_temp = 
        <?php
            $dir = ('./img/display');
            $array_of_files_temp = preg_grep('/^([^.])/', scandir($dir));;
            // shuffle($array_of_files_temp);            /* uncomment this line to randomize */
            $array_of_files= implode("\n", $array_of_files_temp);
            $array_of_files_temp = json_encode($array_of_files);
            echo ($array_of_files_temp);
        ?>;
    String.prototype.filename=function(extension){
        var s= this.replace(/\\/g, '/');
        s= s.substring(s.lastIndexOf('/')+ 1);
        return extension? s.replace(/[?#].+$/, ''): s.split('.')[0];
    }
    function change_display_image(){
        $fileslist = $fileslist_temp.split('\n');
        var cur_file = $('#home-img').attr('src');
        var next_file = '';
        if (cur_file == undefined)
            next_file = $fileslist[0];
        else
            next_file = $fileslist[($fileslist.indexOf(cur_file.filename(true)) + 1) % $fileslist.length];
        $('#home-img').attr('src', "{{url('img/display')}}/" + next_file + "?1");
        console.log(next_file);
        $('#home-img').attr('height', '340');
        var delay = next_file=='1.jpg'?5000:2000;
        setTimeout(change_display_image, delay);
        if (next_file=='1.jpg'){
            $('#home-img-text').html('Safety and Efficiency<br>Keep us moving forward.');
            $('#home-img-text').css('top', '-340px').css('float', 'left');

        }
        else{
            $('#home-img-text').html('Prevent accidents and<br>Maximize productivity');
            $('#home-img-text').css('top', '-180px').css('float', 'right');
        }

    }
    $(function() {
        
        change_display_image();
    });
          
       

</script>
@endsection
