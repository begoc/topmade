<div class="panel panel-info">
    <div class="panel-heading">
        @section('panel-heading')
        @show
    </div>

    <div class="panel-body">
        @section('panel-body')
            <h4>{{$section->title}}</h4>
            <blockquote>
                <small>{{$section->keywords}}</small>
                <p>{{$section->description}}</p>
                <cite title="{{$section->author}}">{{$section->author}}</cite>
            </blockquote>
        @show
    </div>

    @section('panel-footer')
    @show
</div>