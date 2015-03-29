<div class="panel panel-primary">
    <div class="panel-heading">
        <li class="fa fa-edit fa-fw"></li> Contacto
    </div>
    <div class="panel-body">
        <h4>{{$contact->user->name}}</h4>
        <address>
            {{$contact->address}}
            <br />
            {{$contact->city}}, {{$contact->zip_code}} {{$contact->country}}
            <br />
            <abbr title="Phone">P:</abbr> {{$contact->phone}}
            <br />
            <abbr title="Fax">F:</abbr> {{$contact->fax}}
        </address>
        <address>
            {{$contact->user->email}}
        </address>
    </div>
</div>