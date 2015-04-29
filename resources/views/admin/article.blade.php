@extends('admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-{!! $article->icon !!} fa-fw"></i> {!! $article->title !!}</h1>
    </div>
    <!-- /.col-lg-12 -->
    @include('components.section.admin.info')
    @include('components.section.admin.error')

    <div class="col-lg-12">
        {!! Form::model($article, ['class' => 'form-horizontal', 'route' => 'admin.article.save']) !!}
        <div class="well well-sm">
            <div class="wrapper">
                <div class="form-group">
                    {!! Form::label('title', 'Titulo', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Titulo']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Encabezado', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('header', null, ['id' => 'header', 'class' => 'form-control', 'placeholder' => 'Encabezado']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'Contenido (Formato html)', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::textarea('content', null, ['id' => 'content', 'class' => 'form-control', 'placeholder' => 'Contenido', 'rows' => 20]) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-5 col-xs-offset-4 col-sm-offset-5">
                <div class="form-group">
                    {!! Form::hidden('id', $article->id) !!}
                    {!! Form::hidden('handler', $article->handler) !!}
                    {!! Form::hidden('icon', $article->icon) !!}
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