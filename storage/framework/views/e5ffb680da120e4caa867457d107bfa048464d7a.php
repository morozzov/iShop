<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Fucking shop | <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(asset('vendor/bootstrap/js/jquery-3.6.0.js')); ?>" rel="stylesheet"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.js')); ?>" rel="stylesheet"></script>

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

    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
        <div class="container-fluid">


            <a class="navbar-brand" href="/">Fucking shop</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a  class="nav-link <?php
                        echo ($_SERVER['REQUEST_URI']=="/productsByCategory/1"?"active":"");
                        ?>" href="/productsByCategory/1">iPhone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo ($_SERVER['REQUEST_URI']=="/productsByCategory/2"?"active":"");
                        ?>" href="/productsByCategory/2">iPad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo ($_SERVER['REQUEST_URI']=="/productsByCategory/3"?"active":"");
                        ?>" href="/productsByCategory/3">iPod</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                        echo ($_SERVER['REQUEST_URI']=="/productsByCategory/4"?"active":"");
                        ?>" href="/productsByCategory/4">Mac</a>
                    </li>
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
                <a class="mx-3" href="">
                    <img src="<?php echo e(asset('images/icons/basket.svg')); ?>">
                </a>

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
            <a  class="link-dark" href="#">Back to top</a>
        </p>
        <p class="text-secondary">2021 &copy; RMG</p>

    </div>
</footer>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
<?php /**PATH /Users/RMG/laraF/resources/views/template.blade.php ENDPATH**/ ?>