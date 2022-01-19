<?php session_start(); ?>

<!doctype html>
<html lang="en">


<body>

    <?php include('main/navbar.php') ?>
    <?php include('main/header.php') ?>

    <main role="main " class="container">


        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="paragraf1">Create Order</p>
				        <div class="container rounded bg-custom3 my-3">
		  			        <div class="row align-items-center justify-content-center">
                            <form action="controller/nualla.php?action=store" method="POST"><br>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white">Nama</label>
                                <input type="text" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Nama Anda" name="nama_pemesan" required>
                            </div>
                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white">Nama Produk</label>
                                <select name='nama_produk' class="form-control bg-custom1" required>
                                    <option value='Brownies Karamel'>Brownies Karamel</option>     
                                    <option value='Brownies Keju'>Brownies Keju</option>
                                    <option value='Brownies Karamel Keju'>Brownies Karamel Keju</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white">Jumlah</label>
                                <input type="number" min="1" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Jumlah Produk Yang di Order" name="jumlah" required>
                            </div>
                            <label for="exampleFormControlInput1" class="form-label text-white">Harga</label>
                                <select name='harga' class="form-control bg-custom1" required>
                                    <option value='25000'>Rp25.000</option>     
                                    <option value='30000'>Rp30.000</option>
                                    <option value='40000'>Rp40.000</option>
                                </select>
                            </div>
                            <div class="mb-3">  
                                <label for="exampleFormControlInput1" class="form-label text-white">Status</label>
                                    <select name='status' class="form-control bg-custom1" required>
                                        <option value='Order'>Order</option>
                                    </select>
                                    <br>
                                </div>
                            <div class="mb-3">
                                <br>
                                <button type="submit" class="btn btn-primary w-100 bg-custom2 p-0"><br><p class="paragraf1">Order</p></button>
                            </div>
                        </form>
                    <br>
                </div>
            </div>
        </div>
    </main>

    <?php include('main/footer.php') ?>
    <?php include('main/scripts.php') ?>
    
</body>
</html>

