<div class="panel panel-yellow">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-3">
                <i class="fa fa-tasks fa-fw"></i>Actividades
            </div>
        </div>
    </div>

    <div class="panel-body">
        <h4>{{$section->title}}</h4>
        <blockquote>
            <small>{{$section->keywords}}</small>
        </blockquote>
        <blockquote class="pull-right">
            <p>{{$section->description}}</p>
            <cite title="{{$section->author}}">{{$section->author}}</cite>
        </blockquote>
    </div>
</div>