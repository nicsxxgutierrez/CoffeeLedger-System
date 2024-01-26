<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href=/images/coffeelogo2.png>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    </head>

        <body class="bg-gray-200">
            <div class="container position-sticky z-index-sticky top-0">
                <div class="row">
                </div>
            </div>
            <main class="main-content  mt-0">
                <div class="page-header align-items-start min-vh-100"
                    style="background-image: url('/images/blog-img-012.jpg');">
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container my-auto">
                        <div class="row">
                            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                                <div class="card z-index-0 fadeIn3 fadeInBottom">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Log in</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url("adminlogin"); ?>" role="form" class="text-start" method="POST">
                                            <div class="input-group input-group-outline my-3">
                                                <label class="form-label">Username</label>
                                                <input type="username" name="username" class="form-control" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button><br>
                                            </div>
                                            <p class="small fw-bold mt-2 pt-1 mb-0" style="color: black">Don't have an account yet?<a href="<?= site_url("register"); ?>" class="link-danger"> Register Now</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <script src="/assets/js/core/popper.min.js"></script>
            <script src="/assets/js/core/bootstrap.min.js"></script>
            <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
            <script>
                var win = navigator.platform.indexOf('Win') > -1;
                if (win && document.querySelector('#sidenav-scrollbar')) {
                    var options = {
                        damping: '0.5'
                    }
                    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
                }
            </script>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script src="/assets/js/material-dashboard.min.js?v=3.1.0"></script>

    </body>               
</html>