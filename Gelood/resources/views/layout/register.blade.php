<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!--Register Form-->
    <section>
        <div class="login_show">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="assets/img/about.jpg" />
                </div>
                <div class="col" style="margin-top:10px; margin-right: 100px;">
                    <div>
                        <h1>Registrasi</h1>
                    </div>
                    <br>
                    <form action="../config/register.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" required>
                        </div>
                        <div>
                            <div class="col-12">
                                <button class="btn btn-secondary" type="submit">Register</button>
                            </div>
                            <br>
                            <p>Already have account ? <a href="Login_Aebil.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
    </section>

</body>

</html>