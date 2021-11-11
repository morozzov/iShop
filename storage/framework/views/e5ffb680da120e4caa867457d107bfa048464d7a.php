<?php
    use Illuminate\Support\Facades\Session;
    $user = Session::get('user');
    $cart = Session::get('cart');
    if($cart==null)($cart=0);
    $isAuthorize = true;
    if ($user == null) $isAuthorize = false;
?>

    <!doctype html>
<html lang="ru">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Is it shop? | <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(asset('vendor/bootstrap/js/jquery-3.6.0.js')); ?>" rel="stylesheet"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.js')); ?>" rel="stylesheet"></script>
    <link href="<?php echo e(asset('vendor/bootstrap/js/navbar.css')); ?>" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body>

<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">Is it shop?</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02"
                    aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/1" ? "active" : "");
                        ?>" href="/productsByCategory/1">iPhone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/2" ? "active" : "");
                        ?>" href="/productsByCategory/2">iPad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/3" ? "active" : "");
                        ?>" href="/productsByCategory/3">iPod</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo($_SERVER['REQUEST_URI'] == "/productsByCategory/4" ? "active" : "");
                        ?>" href="/productsByCategory/4">Mac</a>
                    </li>
                </ul>
                <div class="d-flex w-100 justify-content-start mx-2">
                    <form class="">
                        <input class="form-control bg-dark text-light " type="text" placeholder="Search"
                               aria-label="Search">
                    </form>
                </div>
                <div class="d-flex w-100 justify-content-end mx-2">
                    <?php if($isAuthorize): ?>
                        <div class="dropstart ps-1 my-2 mx-3">
                            <a class="btn btn-secondary dropdown-toggle m-auto" href="#" role="button"
                               id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e($user->name); ?>

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Personal</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="/users/logout">Logout</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="/users/signin" class="badge mx-3">
                            <button class="btn btn-secondary">Sign in</button>
                        </a>
                    <?php endif; ?>

                    <a class="position-relative pe-2 my-2" href="/cart/view">
                        <img class="" src="<?php echo e(asset('images/icons/basket.svg')); ?>">
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary" id="cart"><?php echo e($cart); ?><span
                                class="visually-hidden">unread messages</span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>

    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <div class="album py-5 bg-light min-vh-100">
        <div class="container">

            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </div>

</main>

<footer class="card-footer">
    <div class="container">
        <p class="float-end">
            <a class="link-dark" href="#">Back to top</a>
        </p>
        <p class="text-secondary">2021 &copy; RMG</p>

    </div>
</footer>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
<?php /**PATH /Users/RMG/laraF/resources/views/template.blade.php ENDPATH**/ ?>