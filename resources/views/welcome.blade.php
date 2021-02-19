<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Miitut</title>

        <link rel="stylesheet" href="/css/all.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.2/css/line.css">
        <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
        <!-- Styles -->

        {{-- Scripts --}}
        <script>
            (function(){
                window.Laravel = {
                    csrfToken: "{{ csrf_token() }}"
                }
            })()
        </script>
    </head>
    <body>
        <div id='app'>
            @if (Auth::check())
            <app :user="{{Auth::user()}}"></app>
            @else
            <app :user="false"></app>
            @endif
        </div>
        <script src="{{mix('/js/main.js')}}"></script>
        <!-- <script src="https://js.stripe.com/v3/"></script> -->
    </body>
</html>
