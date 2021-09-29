<!DOCTYPE html>
<html lang="en">
	<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/rtl/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rtl/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rtl/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
		@yield('css')
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <ul class="nav navbar-top-links navbar-left">
					<li class="dropdown"><a href=""><b> Report </b><i class="fa fa-folder-open"></i></a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b> User Management </b><i class="fa fa-users fa-fw"></i> <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-tasks">
              <li class="divider"></li><li><a href="{{route('profile')}}"><div> Profile <i class="fa fa-users fa-fw"></i></div></a></li>
              @if( Auth::user()->role->namaRule == 'Admin')
              <li class="divider"></li><li><a href="{{route('listuser')}}"><div> List User <i class="fa fa-list fa-fw"></i></div></a></li>
              <li class="divider"></li><li><a href="#"><div> Approval <i class="fa fa-check fa-fw"></i></div></a></li>
              @endif
              <li class="divider"></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Data Master</b><i class="fa fa-book fa-fw"></i> <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-tasks">
              <li class="divider"></li><li><a href="#"><div> Data Master 1 <i class="fa fa-users fa-fw"></i></div></a></li>
              <li class="divider"></li><li><a href="#"><div> Data Master 2 <i class="fa fa-building fa-fw"></i></div></a></li>
              <li class="divider"></li><li><a href="#"><div> Data Master 3 <i class="fa fa-file-text fa-fw"></i></div></a></li>
              <li class="divider"></li><li><a href="#"><div> Data Master 4 <i class="fa fa-folder-open fa-fw"></i></div></a></li>
              <li class="divider"></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>SER</b><i class="fa fa-file-text fa-fw"></i> <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu dropdown-alerts">
              <li class="divider"></li><li><a href="#"><div> Form 1 <i class="fa fa-file-text fa-fw"></i></div></a></li>
              <li class="divider"></li><li><a href="#"><div> Form 2 <i class="fa fa-file-text fa-fw"></i></div></a></li>
              <li class="divider"></li>
            </ul>
          </li>
					@if( Auth::user()->role->namaRule == 'Kemas')
          <li class="dropdown"><a href="{{route('dasboard')}}"><b> Dasboard </b><i class="fa fa-tachometer"></i></a></li>
					@elseif( Auth::user()->role->namaRule == 'Admin')
          <li class="dropdown"><a href="{{route('home')}}"><b> Dasboard </b><i class="fa fa-tachometer"></i></a></li>
					@endif
        </ul>
				<ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-caret-down"></i><b> {{ Auth::user()->name }}<i class="fa fa-user fa-fw"></i></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li class="divider"></li>
              <li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									Logout 
									<i class="fa fa-sign-out fa-fw"></i>
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- Page Content -->
      <div id="page-wrapper">
			@yield('content')
      </div>
    </div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
		@yield('s')
    <script src="js/sb-admin-2.js"></script><script>
        $(document).ready(function() {
          $('#dataTables-example').dataTable();
        });
    </script>
	</body>
</html>