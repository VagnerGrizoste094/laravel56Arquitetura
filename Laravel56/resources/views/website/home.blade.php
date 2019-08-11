@extends('layout.layout')

@section('carousel')
<!-- PAGE HOME -->
<carousel :carousels="{{ $carousel }}"></carousel>
<!-- END HOME -->
@endsection

@section('navbar')
<!-- NAVBAR HOME -->
<navbar admin="{{route('carousel.index')}}"></navbar>
<!-- ENDNAVBAR HOME -->
@endsection

@section('sobre')
<!-- PAGE SOBRE -->
<sobre :textoslide="{{ $textoslide }}"></sobre>
<!-- ENDPAGE SOBRE -->
@endsection

@section('portfolio')
<!-- PAGE PORTFÓLIO -->
<portfolio></portfolio>
<!-- ENDPAGE PORTFÓLIO -->
@endsection

@section('team')
<!-- PAGE TEAM -->
<team></team>
<!-- ENDPAGE TEAM -->
@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection