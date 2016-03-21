<div class="panel panel-default">
    <div class="panel-heading product-item-heading">{{$name}}</div>
    <div class="panel-body">
        <div class="col-md-8">
            <img class="thumbnail" src="{{url($obj['image'])}}">
            <p>{{$obj['description']}}</p>
            <label>Specifications</label>
            <ul>
            @foreach($obj['specification'] as $spec)
                <li>{{$spec}}</li>
            @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <button class="btn btn-warning"><span style="margin-right:10px;" class="fa fa-lg fa-file-pdf-o"></span><strong>Download Datasheet</strong></button>
        </div>        
    </div>
</div>
