
<!doctype html>
<html lang="en">


<body>
    <?php include('main/navbar.php') ?>
    
    <?php include('main/header.php') ?>

	<main class="bg-white w-100">
    	<div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
    		<div class="bg-white w-100">
				  <div class="container bg-custom2 my-3">
		  			 <div class="row align-items-center justify-content-center">
					    <div class="col-6 text-left bg-custom3">
					      	<div class="mb-3">
							  <form action="controller/pesan.php?action=pesan" method="POST">          
							  <p class="paragraf1">Contact Us</p>
							  <label for="exampleFormControlInput1" class="form-label text-white">Nama</label>
							  <input type="nama" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Nama Anda" name="nama" required>
							</div>
							<div class="mb-3">
							  <label for="exampleFormControlInput1" class="form-label text-white">Alamat</label>
							  <input type="alamat" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Alamat Lengkap anda" name="alamat" required>
							</div>
							<div class="mb-3">
							  <label for="exampleFormControlInput1" class="form-label text-white">No Telepon</label>
							  <input type="Notlp" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Nomer Telepon anda" name="no_telp" required>
							</div>
							<div class="mb-5">
							  <label for="exampleFormControlTextarea1" class="form-label text-white">Pesan</label>
							  <textarea type="Pesan" class="form-control bg-custom1" id="exampleFormControlTextarea1" rows="3" name="pesan" required></textarea>
							</div>
							<div class="mb-3">
								<a href="https://wa.wizard.id/1bd110" target="_blank">
                                <button type="submit" class="btn btn-primary w-100 bg-custom2 p-0" name="no_pesanan"><br><p class="paragraf1">Send Message</p></button>
								</a>
							</div>
					    </div>
					    <div class="col-6 text-center">
							<img src="image/barcode.png" class="rounded float-left p-2" width="350">
					    </div>
					</div>
			  	  </div>
			</div>
	  	</div>
    </main>

    <?php include('main/footer.php') ?>
    <?php include('main/scripts.php') ?>

</body>
    
  