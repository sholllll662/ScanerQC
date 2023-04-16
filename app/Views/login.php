<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card text-center">
                <div class="card-header">
                    <h1>Login</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Login Sebagai Admin</h5>
                    <p>
                        <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                    <div class="alert alert-warning">
                        <?php echo session()->getFlashdata('gagal') ?>
                    </div>
                <?php } ?>
                </p>

                <form action="<?= base_url('login/login_action') ?>" method="POST">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">USERNAME</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" id="username" name="username">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">PASSWORD</span>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" id="password" name="password">
                            </div>
                        </li>
                    </ul>
                    <input type="submit" class="btn btn-primary" value="LOGIN" name="login">
                </form>

                </div>

                <div class="card-footer text-muted">
                    Click here to login
                    <a href="/QcProject/public/scan/index" class="card-link">User</a>
                </div>

            </div>
        </div>
    </div>
    <?php ini_set('display_errors', 'off'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<!-- href="/QcProject/public/admin" -->