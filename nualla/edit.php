<?php session_start(); ?>
<?php include('controller/middleware.php'); ?>

<!doctype html>
<html lang="en">
    
<?php include('main/navbar.php') ?>
<?php include('main/header.php') ?>

<body>
    <main role="main " class="container">
        
        <?php 
            include('database/nualla.php');
            $id =  $_GET['id'];

            $data = new orderan();
            $data = $data->show($id);
        ?>
            <div class="container mt-5">
                <div class="row mb-4">
                    <div class="col-12">
                        <p class="paragraf1">Detail Product <?= $data['nama_pemesan'] ?></p>
                        <div class="container rounded bg-custom3 my-3">
                            <form action="controller/nualla.php?id=<?= $data['id'] ?>&action=update" method="POST">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-white">Nama</label>
                                    <input type="text" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan nama anda" name="nama_pemesan" value="<?= $data['nama_pemesan'] ?>">
                                </div>
                                <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white">Nama Produk</label>
                                    <select name='nama_produk' class="form-control bg-custom1" value="<?= $data['nama_produk'] ?>">
                                        <option value='Brownies Karamel' id="Karamel">Brownies Karamel</option>     
                                        <option value='Brownies Keju' id="keju">Brownies Keju</option>
                                        <option value='Brownies Karamel Keju' id="Karamel_keju">Brownies Karamel Keju</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white">Jumlah</label>
                                    <input type="number" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan jumlah pemesanan" name="jumlah" value="<?= $data['jumlah'] ?>">
                                </div>
                                <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white" name="harga">Harga</label>
                                    <select name='harga' class="form-control bg-custom1" value="<?= $data['harga'] ?>">
                                        <option value='25000'>Rp25.000</option>     
                                        <option value='30000'>Rp30.000</option>
                                        <option value='40000'>Rp40.000</option>
                                    </select>
                                </div>
                                <div class="mb-3">  
                                <label for="exampleFormControlInput1" class="form-label text-white">Status</label>
                                    <select name='status' class="form-control bg-custom1" value="<?= $data['status'] ?>">
                                        <option value='Order'>Order</option>
                                        <option value='Menunggu Pembayaran'>Menunggu Pembayaran</option>
                                        <option value='Dibayar'>Dibayar</option>     
                                        <option value='Siap Diantar'>Siap Diantar</option>
                                        <option value='Sedang Diantar'>Sedang Diantar</option>
                                        <option value='Sudah Selesai'>Sudah Selesai</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary btn btn-primary w-100 bg-custom2 p-0"><br><p class="paragraf1">Update</p></button>
                                </div>
                                <br>
                            </form>
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