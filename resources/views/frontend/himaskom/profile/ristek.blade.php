@extends('frontend.layouts.layout')

{{-- page title --}}
@section('title','Himpunan Mahasiswa Teknik Komputer')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<style type="text/css">
	
</style>
@endsection

{{-- page content --}}
@section('content')

@endsection

{{-- vendor scripts --}}
@section('vendor-script')
@endsection

{{-- page scripts --}}
@section('page-script')
<script type="text/javascript">
	$(document).ready(function(){
		var navbarWrap = $('.navbar .navbar-main');
		navbarWrap.removeClass('navcustom');
	});
</script>
@endsection