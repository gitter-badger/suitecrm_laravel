<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel SuiteCRM Advanced Open Portal</title>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('css/default.css')}}" rel="stylesheet">
  
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>   
   <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="wrapper">
     <div class="container-fluid" style="padding-top: 10px; padding-bottom: 20px;">
      <img src="https://suitecrm.com/images/suite_icon.png" class="pull-left">
<div class="pull-right">       
       <a href="{{ url('/auth/logout') }}" title="Log out"  data-toggle="tooltip" data-placement="bottom" data-html="true" title="1st line of text <br> 2nd line of text"	><i class="fa fa-sign-out fa-2x"></i></a>
     </div>
     </div>
 <div class="page-container">
  
	<!-- top navbar -->
    <div class="navbar navbar-default" role="navigation">
       <div class="container-fluid">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="{{ url('') }}" ><?php echo Lang::get('aop.portal_name');?></a>
    	</div>
       
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="col-sm-offset-3">
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i></a></li>
         <li><a href="{{ url('meetings') }}"> <?php echo Lang::get('aop.meetings');?></a></li>
         <li><a href="{{ url('quotes')}}"><?php echo Lang::get('aop.quotes'); ?></a></li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo Lang::get('aop.cases'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('cases') }}"><?php echo Lang::get('aop.case_status_all');?></a></li>
            <li><a href="{{ url('cases') }}"><?php echo Lang::get('aop.case_status_open');?></a></li>
            <li><a href="{{ url('cases') }}"><?php echo Lang::get('aop.case_status_closed');?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ url('cases/create') }}"><?php echo Lang::get('aop.create_case'); ?></a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo Lang::get('aop.my_account');?></a></li>
            <li><a href="#"><?php echo Lang::get('aop.change_password'); ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ url('/auth/logout') }}" title="Log out"><i class="fa fa-sign-out"></i> <?php echo Lang::get('aop.sign_out'); ?></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
        </div>   
       </div>
    </div>
      
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav">
              <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home fa-lg"></i> <?php echo Lang::get('aop.home'); ?></a></li>
              <li><a href="{{ url('cases') }}"><i class="fa fa-support fa-lg"></i> <?php echo Lang::get('aop.cases'); ?></a></li>
              <li><a href="{{ url('quotes')}}"><i class="fa fa-file-pdf-o fa-lg"></i> <?php echo Lang::get('aop.quotes'); ?></a></li>              
            </ul>
        </div>
  	
        <!-- main area -->
        <div class="col-xs-12 col-sm-9" style="padding-top: 20px;">
             @yield('content')
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row-->
    </div><!--/.container-->
    </div>
	<!-- Scripts -->
	<script type="text/javascript">
	$("[data-toggle=tooltip]").tooltip();
	</script>
</body>
</html>
