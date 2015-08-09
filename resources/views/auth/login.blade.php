<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OCUPID CONCEPT</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/includes/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/includes/css/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="{{ asset('/includes/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/includes/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/includes/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/includes/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">

        

        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">

                        @include('errors.list')
                        @if (Session::has('flash_message'))
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                {{Session::get('flash_message')}}
                            </div>
                        @endif

					<form method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<fieldset>
								<div class="form-group">
										<input type="email" class="form-control" placeholder="E-Mail Address" name="email">
								</div>

								<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="password">
								</div>

								<div class="form-group">
										<button type="submit" class="btn btn-lg btn-success btn-block">
											Login
										</button>
										<a href="/password/email">Forgot Your Password?</a>
								</div>
						</fieldset>
					</form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('/includes/js/jquery.min.js') }}" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/includes/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/includes/js/metisMenu.min.js') }}" type="text/javascript"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('/includes/js/raphael-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/includes/js/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/includes/js/morris-data.js') }}" type="text/javascript"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/includes/js/sb-admin-2.js') }}" type="text/javascript"></script>

</body>

</html>
