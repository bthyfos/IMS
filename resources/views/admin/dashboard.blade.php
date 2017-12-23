<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="brian thomas">

    <title>IMS ADMIN</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet"  href="{{asset('/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
    <link href="{{asset('css/morris.css')}}" rel="stylesheet">
    <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/vue.css')}}" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
    min-height: 100%;
    background: #E3E8E7;
    font-size: 14px;
    line-height: 1.6;
        }
    .sidebar ul li :hover 
    {
    background-color: white;
    }
     .sidebar ul li :click
     {

            alert('oak');
     } 
     </style>
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">IMS</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                         <li>
                            <a href="#">
                                @foreach($activities as $activity)
                                <div class="responsive">
                                    <strong>{{$activity->activityType}}</strong>
                                    <span class="pull-right text-muted">
                                        <em>{{$activity->user->name}} {{$activity->user->surname}}</em>
                                    </span>
                                </div>
                                <div>
                                    </div>
                                @endforeach
                            </a>
                        </li>
                      <hr>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Activities</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{'adminSettings'}}">Settings</a></li>
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
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search" style="margin-top:50px;">
                            <div class="input-group custom-search-form">
                                {{--<input type="text" class="form-control" placeholder="Search...">--}}
                                {{--<span class="input-group-btn">--}}
                                {{--<button class="btn btn-default" type="button">--}}
                                    {{--<i class="fa fa-search"></i>--}}
                                {{--</button>--}}
                            {{--</span>--}}
                            </div>
                        </li>
                        <li >
                            <a href="{{'dashboard'}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i>Manager Staff<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{'systemUsers'}}">Staff List</a>
                                </li>
                                <li>
                                    <a href="{{'registration'}}">Register Staff</a>
                                </li>
                            </ul>

                        </li>

                        <li>
                            <a href="#"><i class="fa fa-map fa-fw"></i>Regions<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{'regions'}}">Regions List</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-basket fa-fw"></i>Stock Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href={{'stock'}}>Stock Available</a>
                                </li>
                                <li>
                                    <a href={{'inavailableStock'}}>Out Of Stock List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{'departmentList'}}">Departments List</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      

        @yield('content')

        @include('adminSide.departments.add')
        @include('regions.add')

    </div>
    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>

    <script src="{{asset('js/axios.min.js')}}"></script>

    @stack('scripts')
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
    <script src="{{asset('js/raphael.min.js')}}"></script>
    <script src="{{asset('js/morris.min.js')}}"></script>
    <script src="{{asset('js/morris-data.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <script src="{{asset('js/metisMenu.min.js')}}"></script>
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
