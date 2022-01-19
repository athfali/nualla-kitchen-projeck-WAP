
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
    <?php include('main/navbar.php') ?>
	<div id="logout">
        <?php if(isset($_GET['signout'])){?>
            <div class="alert alert-success">
                <small>Anda Berhasil Logout</small>
            </div>
        <?php }?>
    </div>

    <main class="bg-custom1">
    	<div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
    		<div class="bagian1">
			  <div class="row align-items-center ms-3">
			    <div class="col m-5">
			    	<p class="paragraf3">Premium <br> Brownies Cake</p>
    				<p class="paragraf5">Selamat Datang di Website Nualla Kitchen<br>A Trully Brownies Taste</p>
			    </div>
			    <div class="col p-0">
			    	<img src="image/kue.png" class="float-end" width="500">
			    </div>
			  </div>
			</div>
			<div class="bagian2 mt-n9">
				<div class="row align-items-center m-3">
				    <div class="col">
				    	<img src="image/sc.png" class="float-center" width="400">
				    </div>
				    <div class="col p-0">
				    	<p class="paragraf3">About Us</p>
	    				<p class="paragraf5">Nuala Kitchen adalah sebuah brand yang menjual dessert dengan menu utama brownies yang dibuat home made.  Selain itu Nuala memiliki produk favorit yaitu Brownies Bar yang dibuat praktis.</p>
	    				<br>
	    					<a class="navigasi1 " href="testi.php">Lebih Lanjut</a>
	    				</p>
				    </div>
			  	</div>
			</div>
	  	</div>
	  	<div class="bagian3 d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
	  		<div class="container">
	  			<div class="row align-items-center">
				    <div class="col text-center">
						<a href="">
				    	<img src="image/jamkerja.png" class="" width="300">
						</a>
				    </div>
				    <div class="col text-center">
						<a href="https://www.google.co.id/maps/@-6.839436,107.5699161,3a,75y,21.88h,90t/data=!3m7!1e1!3m5!1sXh612sOQzmNvUYCurwucsA!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DXh612sOQzmNvUYCurwucsA%26cb_client%3Dsearch.revgeo_and_fetch.gps%26w%3D96%26h%3D64%26yaw%3D21.884144%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656?hl=id">
				    	<img src="image/alamat.png" class="" width="300">
						</a>
				    </div>
				    <div class="col text-center">
						<a href="https://web.whatsapp.com/">
				    	<img src="image/telfon.png" class="" width="300">
						</a>
				    </div>
			  </div>
	  		</div>
	  	</div>
	  	<div class="bagian4 d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
	  		<div class="container">
	  			 <div class="row align-items-center justify-content-center">
				    <div class="col-4">
				      <p class="paragraf3">Featured Product</p>
				    </div>
				 </div>
	  		</div>
	  		<div class="container">
	  			<div class="row align-items-center justify-content-center">
				    <div class="col text-center">
				    	<img src="image/selai.png" class="" width="300">
				    </div>
				    <div class="col text-center">
				    	<img src="image/bronies.png" class="" width="300">
				    </div>
				    <div class="col text-center">
				    	<img src="image/kopi.png" class="" width="300">
				    </div>
			  </div>
	  		</div>
	  		<div class="container">
	  			<div class="row align-items-center justify-content-center">
				    <div class="col">
				    	<p class="paragraf5 text-center">Jam</p>
				    </div>
				    <div class="col">
				    	<p class="paragraf5 text-center">Brownies Bar</p>
				    </div>
				    <div class="col">
				    	<p class="paragraf5 text-center">Caramylk</p>
				    </div>
			  </div>
	  		</div>
	  		<div class="container">
	  			 <div class="row align-items-center justify-content-center">
				    <div class="col-3 text-center">
						<br>
	    				<a class="navigasi1 " href="product.php">Selanjutnya</a>
				    </div>
				 </div>
	  		</div>
	  	</div>
    </main>
	
	<?php include('main/footer.php') ?>
    <?php include('main/scripts.php') ?>
    
</body>
</html>