<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
     <link href="{{asset("public/template/edmin/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
     <link href="{{asset("public/template/edmin/bootstrap/css/bootstrap-responsive.min.css")}}" rel="stylesheet">
     <link href="{{asset("public/template/edmin/css/theme.css")}}" rel="stylesheet">
     <link href="{{asset("public/template/edmin/images/icons/css/font-awesome.css")}}" rel="stylesheet">
</head>
<body>
 <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#">{{ config('myconfig.app_title') }}</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo asset(Session::get('usrfoto'));?>" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo url('/user/editUser/'.Session::get('usrid'));?>">Edit Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/user/logoutUser') }}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
 <div class="wrapper">
		<div class="container">
			<div class="row"> 
<div class="span3">
  <div class="sidebar">
    <ul class="widget widget-menu unstyled">
      <li class="#"> <a href="#"> <i class="menu-icon icon-dashboard"></i> Dashboard </a> </li>
      <li class="@if(Request::segment(1)== 'user') {{ 'active' }} @endif"> <a href="{{ url('/user/') }}"> <i class="menu-icon icon-user"></i> Users </a></li>
      <li class="#"> <a href="#"> <i class="menu-icon icon-tags"></i> Categories </a></li>
      <li class="#"> <a href="#"> <i class="menu-icon icon-book"></i> Articles </a></li>
       <li class="#"> <a href="#"> <i class="menu-icon icon-check"></i> Status </a> </li>
    <li class="#"> <a href="#"> <i class="menu-icon icon-picture"></i> Gallery </a> </li>
     <li class="#"> <a href="#"> <i class="menu-icon icon-file"></i> Uploads Image </a> </li>
    </ul>
  </div>
  <!--/.sidebar-->
</div>
<!--/.span3-->

 <div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
                           
								<h3>@yield('page_title')</h3>
							</div>
							<div class="module-body">
                           
               <!------------------------Validation error------------------------->
                             @if (count($errors) > 0)
                            <div class="alert alert-danger">
                             {!! Form::button('x',array('class' => 'close', 'data-dismiss' => 'alert')) !!}
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
               <!------------------------Display messages------------------------->   
               @if(Session::has('success'))
               <div class="alert alert-success">
                {!! Form::button('x',array('class' => 'close', 'data-dismiss' => 'alert')) !!}
                 {{ Session::get('success') }}
               </div>
               @endif
               
               @if(Session::has('error'))
               <div class="alert alert-error">
                {!! Form::button('x',array('class' => 'close', 'data-dismiss' => 'alert')) !!}
                 {{ Session::get('error') }}
               </div>
               @endif
                   
                          @yield('content')
                             </div>
						</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<div class="footer">
		<div class="container">
			<b class="copyright">&copy; CMS Admin {{ date('Y') }}. Template by Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>
    <script type="application/javascript" src="{{asset("public/template/edmin/scripts/jquery-1.9.1.min.js")}}"></script>
    <script type="application/javascript" src="{{asset("public/template/edmin/scripts/jquery-ui-1.10.1.custom.min.js")}}"></script>
    <script type="application/javascript" src="{{asset("public/template/edmin/bootstrap/js/bootstrap.min.js")}}"></script>
    <script type="application/javascript" src="{{asset("public/template/edmin/scripts/common.js")}}"></script>
      @yield('other')
</body>