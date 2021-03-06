<!DOCTYPE html>
<html>
  <head>
    <title>IMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    {{--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">--}}
    {{--<link href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">--}}

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    {{--<link href="{{asset('bower_components/bootstrap/dist/css/bootstrap-theme.min.css')}}" rel="stylesheet">--}}


    <link rel="stylesheet"  href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet"  href="{{asset('/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
     <link href="{{asset('/sass/app.scss')}}" rel="stylesheet">

    <style type="text/css">
      .vertical_line 
      {
        height:150px; width:1px;background:#000;
      }
      [v-cloak] 
        {
          display: none;
        }

        .tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}

.tabs-left > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  -webkit-border-radius: 4px 0 0 4px;
     -moz-border-radius: 4px 0 0 4px;
          border-radius: 4px 0 0 4px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
    </style>
 
    {{--<script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>--}}
    <script src="https://unpkg.com/vue"></script>
  </head>
  <body>
   <div  class="container">
    <div class ="row">

  <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Plan International Org</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav">

      <li class="active"><a   href="{{'/home'}}">Home</a></li>
      </li><li class="dropdown">
        <a  href="{{'products'}}" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a  href="{{'products'}}">Add To Stock</a></li>

          <li><a  href="{{'productsList'}}">Stock List</a></li>
          <li><a href="{{'outOfStock'}}">Out Of Stock</a></li>
          <li><a  href="{{'returns'}}">Returns</a></li>
          <li><a   href="#">Pending Orders</a></li>
        </ul>
      </li>
       <li><a  href="{{'handover'}}">Hangovers</a></li>
    </ul>
       
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

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
                                     <li><a href="{{'settings'}}">Settings</a></li>
                                </ul>
                            </li>
      <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="">Log out</a></li>
          <li><a href="{{'settings'}}">Settings</a></li>
        </ul>
      </li> -->
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

    </div>
   </div>
    
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
        </div>
        @yield('content')
      </div>
    </div>



    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


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
   <script src="js/main.js"></script>
   @stack('scripts')
  </body>
</html>