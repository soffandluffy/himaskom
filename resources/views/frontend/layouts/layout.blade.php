{{-- pageConfigs variable pass to Helper's updatePageConfig function to update page configuration  --}}
@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
<!DOCTYPE html>
@php
$configData = Helper::applClasses();
@endphp
<html class="loading"
  lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif"
  data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | HIMASKOM Undip</title>
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/himaskom/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/himaskom/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/himaskom/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Include core + vendor Styles -->
  @include('panels.styles')
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom/himaskomcustom.css')}}">

</head>
<!-- END: Head-->

<body
  class="{{$configData['mainLayoutTypeClass']}} @if(!empty($configData['bodyCustomClass'])) {{$configData['bodyCustomClass']}} @endif"
  data-open="click" data-menu="vertical-modern-menu" data-col="1-column">

  <div id="main-wrapper">
    @include('frontend.layouts.navbar')
    
    <!--  main content -->
    @yield('content')
  </div>
  
  {{-- vendor scripts and page scripts included --}}
  @include('panels.scripts')

</body>

</html>