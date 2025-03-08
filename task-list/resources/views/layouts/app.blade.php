<!DOCTYPE html>
<html>
    <head>
        <title>Task list</title>
        @yield('styles')
    </head>
    <body>
        <h1>@yield('title')</h1>
        <div>
            @if (session()->has('success'))
            <div>{{session('success')}}</div>
        </div>
            @endif
       @yield('content')
        </div>
    </body>
</html>
