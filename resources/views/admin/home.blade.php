@extends('admin')

@section('content')
<div id="wrapper">
	@include('components.nav.admin.header')

	@include('components.nav.admin.side')

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-7 col-lg-8">
				@include('components.section.admin.sections.enterprise', ['section' => $sections->get('enterprise')])
			</div>

			<div class="col-sm-12 col-md-5 col-lg-4">
				@include('components.section.admin.contact')
			</div>
		</div>
	</div>
</div>
@endsection
