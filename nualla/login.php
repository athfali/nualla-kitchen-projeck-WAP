<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title >Home</title>
</head>
<body>
    <?php include('main/header.php') ?>
	
    <main role="main " class="container">

        <main class="bg-white w-100">
    	<div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
    		<div class="bg-white w-100">
				  <div class="container bg-custom2 my-3">
		  			 <div class="row align-items-center justify-content-center">
					    <div class="col-6 text-left bg-custom3 h-100">
                            <p class="paragraf1">Login</p>
                            <form action="controller/auth.php?action=login" method="POST" >  
					      	<div class="mb-3">    
							    <label for="exampleFormControlInput1" class="form-label text-white"><h4>Email</h4></label>
                                <br>
							    <input type="email" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="input your email" name="email" Required>
							    </div>
						    <div class="mb-3">
							    <label for="exampleFormControlInput1" class="form-label text-white"><h4>Password</h4></label>
							    <input type="password" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="input yout password" name="password" required>
							    </div>
                                <br><br><br>  
                            <div class="mb-3">
							<button type="submit" class="btn btn-primary w-100 bg-custom1 p-0"><br><p class="paragraf3">LOGIN</p></button>
                            </div>
					    </div>
					    <div class="col-6 text-center">
							<div id="carousel" class="carousel slide" data-bs-ride="carousel"><br>
							<div class="carousel-inner col-6">
								<div class="carousel-item active">
								<img src="image/p1.png" alt="Brownies Karamel">
								<br>
								<p class="paragraf7">Brownies Karamel</p>
								</div>
								<div class="carousel-item">
								<img src="image/p2.png" alt="Brownies Keju">
								<br>
								<p class="paragraf7">Brownies Keju</p>	
								</div>
								<div class="carousel-item">
								<img src="image/p4.png" alt="Brownies Karamel Keju">
								<br>
								<p class="paragraf7">Brownies Karamel Keju</p>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
							</div>
					    </div>
					</div>
			  	  </div>
			</div>
	  	</div>
    </main>

    <?php include('main/footer.php') ?>
    <?php include('main/scripts.php') ?>

</body>
</html>