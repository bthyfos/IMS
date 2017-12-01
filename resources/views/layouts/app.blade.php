<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IMS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    
  <!--   <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('js/vue.js') }}"></script>
    
    <script> 
      const vm = new Vue({
        el:'#app',
        data:{
            hidden:false
        },
        methods:{
            logIn: function()
            {
                this.hidden = true;
            },
            hide:function()
            {
                this.addClass('hidden');
                return true;
            },
            show:function()
            {
                this.removeClass('hidden');
                return true;
            }
        }
       });
    </script>
</body>
</html>
