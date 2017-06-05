<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'Laravel 5.3'}}</title>
    </head>
    <body>
        @yield('content')
        
        @stack('scripts')
    </body>
</html>
