<?php session_start();?>
<?php include('controller/middleware.php'); ?>

<!doctype html>
<html lang="en">

<body>
    <?php include('main/navbar_admin.php') ?>
    <?php include('main/header.php') ?>

    <main role="main " class="container">
        
        <?php 
            include('database/nualla.php');

            $data = new orderan();
        ?>

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="paragraf1" >List Order</p>
				        <div class="container rounded bg-custom3 my-3">
                    <br>

                    <table class="table table-hover desc2">
                        <thead>
                            <tr>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Nama</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Nama Produk</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Jumlah</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Harga Satuan</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Status</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Action</p></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $id=$_SESSION['id'];
                            foreach($data->getAll($id) as $item) { ?>
                            <tr>
                                <td class="form-label text-white"><?= $item['nama_pemesan'] ?></td>
                                <td class="form-label text-white"><?= $item['nama_produk'] ?></td>
                                <td class="form-label text-white" style="text-align:center"><?= $item['jumlah'] ?></td>
                                <td class="form-label text-white" style="text-align:center">IDR <?= $item['harga'] ?></td>
                                <td class="form-label text-white" style="text-align:center"><?= $item['status'] ?></td>
                                <td class="form-label text-white" style="text-align:center">
                                <div class="btn-group " role="group " aria-label="Basic example ">
                                <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-info text-white ">
                                    <i>Edit</i>
                                </a>
                                <form onsubmit="return confirm('Seriusan lu mau hapus?')" 
                                                    action="controller/nualla.php?id=<?= $item['id'] ?>&action=delete" 
                                                    method="POST">
                                    <button type="submit" class="btn btn-danger text-white">
                                    <i>Trash</i>
                                    </button>
                                </form>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <br>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include('main/footer.php') ?>
    <?php include('main/scripts.php') ?>
    
</body>

