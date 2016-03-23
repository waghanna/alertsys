<div class="panel panel-default">
    <div class="panel-heading product-item-heading">{{$name}}</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="product-item-img">
                    <img class="thumbnail" src="{{url($obj['image'])}}">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9">
                <label>Description</label>
                <p>{{$obj['description']}}</p>
                <label>Specifications</label>
                <ul>
                @foreach($obj['specification'] as $spec)
                    <li>{{$spec}}</li>
                @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning pull-right"><span style="margin-right:10px;" class="fa fa-lg fa-file-pdf-o"></span><strong>Download Datasheet</strong></button>
            </div>        
        </div> 
    </div>
</div>
