<!doctype html>
<html lang="en">

<body>
    
    <?php include('main/navbar_admin.php') ?>
    <?php include('main/header.php') ?>

    <main role="main " class="container">

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="paragraf1">Register</p>
                        <div class="container rounded bg-custom3 my-3">
		  			        <div class="row align-items-center justify-content-center">
                                <form action="controller/auth.php?action=register" method="POST">
                            <div class="mb-3">
                                <br>
                                <label for="exampleFormControlInput1" class="form-label text-white">Name</label>
                                <input type="text" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Input your name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white">Email</label>
                                <input type="email" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Input your email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-white">Password</label>
                                <input type="password" class="form-control bg-custom1" id="exampleFormControlInput1" placeholder="Input your password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <br>
                                <button type="submit" class="btn btn-primary w-100 bg-custom2 p-0"><br><p class="paragraf1">Daftarkan</p></button>
                            </div>
                            <div class="mb-3">          
                                <input type="hidden" class="form-control" value="User" name="level">
                            </div>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </main>

    <?php include('main/footer.php') ?>
    <?php include('main/scripts.php') ?>

</body>
</html>