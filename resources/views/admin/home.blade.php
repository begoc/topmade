@extends('admin')

@include('components.nav.header')

@include('components.nav.side')

@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
