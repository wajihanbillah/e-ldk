<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
			<header class="bmd-layout-header" style="height:100px;">
				<div class="navbar navbar-light bg-faded" width="auto" height="60px">
						<button class="btn btn-secondary bmd-btn-icon navbar-toggler" width="auto" height="100px" type="button" data-toggle="drawer" data-target="#dw-s2">
							<span class="sr-only">Toggle drawer</span>
							<img src="icon/ikonmenu.png" width="30px" height="30px" class="d-inline-block" alt="" border="1px" style="border:1px;">
						</button>
						
						<a class="navbar-brand" href="index.php">
							<img src="picture/logo tengah.png" width="auto" height="60px" class="d-inline-block" alt="">
						</a>

						<a class="navbar-brand" href="index.php" style="align:center">
							<img src="picture/logo.png" width="auto" height="60px" class="d-inline-block" alt="">
						</a>
		
				</div>
			</header>
			
			<div id="dw-s2" class="bmd-layout-drawer bg-faded">
				<header>
					<a class="navbar-brand">Main Menu</a>
					<div class="dropdown-divider"></div>
				</header>
				
				<ul class="list-group nav-pills">
					<a class="btn btn-primary list-group-item nav-item" href="index.php">HOME</a>
					<a class="btn btn-primary list-group-item nav-item" data-toggle="collapse" href="#ProfileCollapse" role="button" aria-expanded="false" aria-controls="ProfileCollapse"> PROFILE </a>
						<div class="collapse" id="ProfileCollapse">
							<div class="dropdown-divider"></div>
								<a class="list-group-item dropdown-item" href="?module=profile#pos">User</a>
								<a class="list-group-item dropdown-item" href="?module=place#pos">Place</a>
							<div class="dropdown-divider"></div>
						</div>
						<a class="btn btn-primary list-group-item nav-item" data-toggle="collapse" href="#AccountCollapse" role="button" aria-expanded="false" aria-controls="AccountCollapse"> ACCOUNT </a>
					
						<div class="collapse" id="AccountCollapse">
							<div class="dropdown-divider"></div>
								<a class="list-group-item dropdown-item" href="?module=login#pos">Login</a>
								<a class="list-group-item dropdown-item" href="?module=register#pos">Register</a>
								<a class="list-group-item dropdown-item" href="?module=forgotpass#pos">Forgot Password</a>
							<div class="dropdown-divider"></div>
						</div>
				</ul>
			</div>
	  
	  
		<main class="bmd-layout-content">
		
			<?php if(isset($_GET['module']))
						include "konten/$_GET[module].php";
					else
						include "konten/home.php";?>
		
			</div>
		
		</main>
	</div>
    </body>
</html>
