<?php $__env->startSection('title'); ?>Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Fucking shop</h1>
            <p class="col-md-8 fs-4">Best among the best. There is no reason for doubt.
                Having ordered from us once, you will not think about choosing a store in the future. Our clients love
                us, and we a priori love them.</p>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Buy new iPhone</h2>
                <p>Choose iPhone for yourself or your loved one right now. And we will help you.</p>
                <form action="/productsByCategory/1">
                    <button class="btn btn-outline-light">View</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Check Mac</h2>
                <p></p>
                <form action="/productsByCategory/4">
                    <button class="btn btn-outline-secondary">Check it</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/RMG/laraF/resources/views/pages/home.blade.php ENDPATH**/ ?>