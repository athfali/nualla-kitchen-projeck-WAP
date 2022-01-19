<?php session_start(); ?>
<?php include('controller/middleware.php'); ?>

<!doctype html>
<html lang="en">
    
<?php include('main/navbar.php') ?>
<?php include('main/header.php') ?>

<body>
    <main role="main " class="container">
        
        <?php 
            include('database/auth.php');
            $id =  $_GET['id'];

            $data = new auth();
            $data = $data->show($id);
        ?>
            <div class="container mt-5">
                <div class="row mb-4">
                    <div class="col-12">
                        <p class="paragraf1">Detail User <?= $data['name'] ?></p>
                        <div class="container rounded bg-custom3 my-3">
                            <form action="controller/auth.php?id=<?= $data['id'] ?>&action=update" method="POST">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-white">Nama</label>
                                    <input type="text" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Nama anda" name="name" value="<?= $data['name'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-white">Email</label>
                                    <input type="text" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Email anda" name="email" value="<?= $data['email'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label text-white">Password</label>
                                    <input type="password" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Masukan Password" name="password" value="<?= $data['password'] ?>">
                                </div>
                                <div class="mb-3">  
                                <label for="exampleFormControlInput1" class="form-label text-white">Level</label>
                                    <select name='level' class="form-control bg-custom1" value="<?= $data['level'] ?>">
                                        <option value='Admin'>Admin</option>
                                        <option value='Bronze'>Bronze</option>
                                        <option value='Silver'>Silver</option>     
                                        <option value='Gold'>Gold</option>
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