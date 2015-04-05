@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-edit fa-fw"></i> Contacto</h1>
    </div>
    <!-- /.col-lg-12 -->
    @include('components.section.admin.info')
    @include('components.section.admin.error')

    <div class="col-lg-12">
        {!! Form::model($contact, ['class' => 'form-horizontal']) !!}
            <div class="well well-sm">
                <h4>Dirección de contacto</h4>
                <br />
                <div class="wrapper">
                    <div class="form-group">
                       {!! Form::label('name', 'Compañia', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('name', $contact->user->name, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Compañia']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('email', $contact->user->email, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'data-toggle' => 'popover', 'data-trigger' => 'focus', 'title' => 'Cambiar email', 'data-content' => 'Si cambias el email, la próxima vez deberá autenticarse con el nuevo email']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Dirección', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('address', null, ['id' => 'address', 'class' => 'form-control', 'placeholder' => 'Dirección']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('zip_code', 'Código Postal', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::text('zip_code', null, ['id' => 'zip_code', 'class' => 'form-control', 'placeholder' => 'Código Postal']) !!}
                        </div>
                        {!! Form::label('city', 'Cuidad', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::text('city', null, ['id' => 'city', 'class' => 'form-control', 'placeholder' => 'Cuidad']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('country', 'País', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::text('country', null, ['id' => 'country', 'class' => 'form-control', 'placeholder' => 'País']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Teléfono', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
                        </div>
                        {!! Form::label('fax', 'Fax', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::text('fax', null, ['id' => 'fax', 'class' => 'form-control', 'placeholder' => 'Fax']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-5 col-xs-offset-4 col-sm-offset-5">
                    <div class="form-group">
                    {!! Form::hidden('user', $contact->user->id) !!}
                    {!! Form::hidden('id', $contact->id) !!}
                        {!! Form::reset('Restaurar', ['class' => 'btn btn-outline btn-default']) !!}
                        {!! Form::button('Guardar', [
                            'id' => 'save',
                            'type' => 'submit',
                            'class' => 'btn btn-outline btn-success',
                            'data-loading-text' => 'Guradando ...'
                        ]) !!}
                    </div>
                </div>
            </div>
        {!! Form::close()  !!}
    </div>
</div>
@endsection
