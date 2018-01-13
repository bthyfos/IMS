    <!DOCTYPE html>
<html>
  <head>
    <title>IMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet"  href="{{asset('/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
      <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
       <link href="{{asset('css/landingPage.css')}}" rel="stylesheet">
    <script src="{{asset('js/vue.js')}}"></script>
    <script src="{{asset('js/vee-validate.js')}}"></script>
    <script src="{{asset('js/vee-validate2.js')}}"></script>
     <script>
        Vue.use(VeeValidate);
    </script>
      <script src="{{asset('js/vue.js')}}"></script>
      <script src="{{asset('js/vee-validate.js')}}"></script>
      <script src="{{asset('js/vee-validate2.js')}}"></script>

  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IMS</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav">



              <li><a   href="{{'/home'}}">Home</a></li>

                  <li>
                      <a href="#">Products &#9662;</a>
                      <ul class="dropdown-menu" >
                          <li><a  href="{{'products'}}">Add </a></li>
                          <li><a  href="{{'productsList'}}">Stock List</a></li>
                          <li><a  href="{{'outOfStock'}}">Out Of Stock</a></li>
                      </ul>
                  </li>
              <li><a href="{{'handover'}}">Hangovers</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <i class="fa fa-user fa-fw"></i> 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="{{'settings'}}">Settings</a></li>
                      <li>
                          <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>

                  </ul>
              </li>
          </ul>
      </div>
  </nav>
   <div  class="container">
    <div class ="row">

    </div>
   </div>
    
   <div class="container">
        @yield('content')
        @include('products.productType')
   </div>
    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>

    <script>
        $('.menu li a').click(function(e) 
        {
        var $this = $(this);
          if (!$this.hasClass('active')) 
          {
            $this.addClass('active');
              }
             
                });
    </script>
   @stack('scripts')
  <script src="{{asset('js/main.js')}}"></script>
   <script src ="{{asset('js/toastr.min.js')}}"></script>

  <script>
        @if(Session::has('message'))
        var type ="{{session::get('alert-type','info')}}";
        switch(type)
        {
            case 'success':
            toastr.success("{{session::get('message')}}");
            break;
        }
        @endif
    </script>
  </body>
</html>