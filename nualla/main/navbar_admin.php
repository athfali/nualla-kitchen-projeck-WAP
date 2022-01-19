<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title >Nualla</title>
</head>

<?php include('canvas.php') ?>

<body>
  <header class="p-3 text-white">
  	<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <img src="image/Logo.png" class="rounded float-left p-2" width="150">
    	<div class="container">
    		<ul class="nav nav-pills justify-content-lg-end">
          <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">MENU</a> </li>  
          <li class="nav-item"><a class="nav-link" href="order_admin.php">ORDER</a> </li>
          <li class="nav-item"><a class="nav-link" href="user_admin.php">LIST USER</a> </li>
          <li class="nav-item"><a class="nav-link" href="information_admin.php">LIST ORDER</a> </li>                
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ACCOUNT
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="register.php">Register Account</a>
            <a class="dropdown-item" href="logout.php" onclik="return confirm('Seriusan lu mau logout?')">Logout</a>
          </li>
        </ul>
	  </div>
  	</div>
  </header>