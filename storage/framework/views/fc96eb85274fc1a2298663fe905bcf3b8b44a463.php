<?php $__env->startSection('title'); ?>Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
        use \Illuminate\Support\Facades\Session;
        $user = Session::get('user');
    ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card shadow-sm p-1">
                    <div class="d-flex justify-content-center">
                        <a href="/product/<?php echo e($product->id); ?>" class="">
                            <img class="img-fluid col-8 m-auto align-self-center d-block"
                                 src="<?php echo e(asset($product->image_path)); ?>">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><?php echo e($product->name); ?></p>
                        <p class="card-text"><?php echo e($product->description); ?></p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/product/<?php echo e($product->id); ?>" class="btn btn-sm btn-outline-dark">
                                    Learn more
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-dark"
                                        onclick="buttonAddClick(<?php echo e($product->id); ?>,<?php echo e($user->id); ?>)">To card
                                </button>
                            </div>

                            <div class="progress w-25">
                                <div class="progress-bar bg-dark" role="progressbar"
                                     style="width: <?php echo e($product->rating*20); ?>%" aria-valuenow="25"
                                     aria-valuemin="0"
                                     aria-valuemax="100"><?php echo e($product->rating); ?></div>
                            </div>
                            <small class="text-muted">$<?php echo e($product->price); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(count($products)==0): ?>
            <p class="text-secondary">Category is empty</p>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/RMG/laraF/resources/views/products/getByCategoryId.blade.php ENDPATH**/ ?>