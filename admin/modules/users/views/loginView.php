<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body bg-white p-5" style="border-radius: 1rem;">
                            <form method="POST" action="?mod=users&controller=index&action=login" class=" mt-md-4 pb-5 d-flex flex-column">
                                <h2 class="fw-bold mb-4 text-uppercase text-center">Đăng nhập admin</h2>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Tên đăng nhập</label>
                                    <input type="text" name="username" id="typeEmailX" class="form-control" />
                                    <?php echo form_error('username') ?>
                                </div>

                                <div class="form-outline form-white mb-5">
                                    <label class="form-label" for="typePasswordX">Mật khẩu</label>
                                    <input type="password" name="password" id="typePasswordX" class="form-control" />
                                    <?php echo form_error('password') ?>
                                </div>


                                <button name="btn-login-admin" class="btn-login-admin btn-lg text-center mt-3" type="submit">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>