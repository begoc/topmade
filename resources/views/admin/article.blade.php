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
    </div>
</div>
@endsection