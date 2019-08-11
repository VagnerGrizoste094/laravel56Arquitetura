<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layout.partials.head')
    <body>
	<div id="app">	    
	    @yield('carousel')
	    @yield('navbar')
	    @yield('sobre')
	    @yield('portfolio')
	    @yield('team')
	    @include('layout.partials.footer')
	</div>
	@yield('scripts')
    </body>
</html>