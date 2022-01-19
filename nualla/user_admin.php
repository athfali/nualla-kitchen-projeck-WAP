<?php session_start();?>
<?php include('controller/middleware.php'); ?>

<!doctype html>
<html lang="en">

<body>
    <?php include('main/navbar_admin.php') ?>
    <?php include('main/header.php') ?>

    <main role="main " class="container">
        
        <?php 
            include('database/auth.php');

            $data = new Auth();
        ?>

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="paragraf1" >List User</p>
				        <div class="container rounded bg-custom3 my-3">
                    <br>

                    <table class="table table-hover desc2">
                        <thead>
                            <tr>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Nama</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Email</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Password</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Level</p></th>
                                <th scope="col " style="text-align:center"><p class="paragraf7">Action</p></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $id=$_SESSION['id'];
                            foreach($data->getAll($id) as $item) { ?>
                            <tr>
                                <td class="form-label text-white"><?= $item['name'] ?></td>
                                <td class="form-label text-white"><?= $item['email'] ?></td>
                                <td class="form-label text-white"><?= $item['password'] ?></td>
                                <td class="form-label text-white"><?= $item['level'] ?></td>
                                <td class="form-label text-white" style="text-align:center">
                                <div class="btn-group " role="group " aria-label="Basic example ">
                                <form onsubmit="return confirm('Seriusan lu mau hapus?')" 
                                                    action="controller/auth.php?id=<?= $item['id'] ?>&action=delete" 
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

