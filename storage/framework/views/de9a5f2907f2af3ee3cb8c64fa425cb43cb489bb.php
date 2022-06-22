
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.home-master','data' => []]); ?>
<?php $component->withName('home-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('content'); ?>


        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="http://commondatastorage.googleapis.com/codeskulptor-assets/lathrop/nebula_brown.png" width="750" height="300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2017 by
                <a href="#">Start Bootstrap</a>
            </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="http://commondatastorage.googleapis.com/codeskulptor-assets/lathrop/nebula_brown.png" width="750" height="300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2017 by
                <a href="#">Start Bootstrap</a>
            </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="http://commondatastorage.googleapis.com/codeskulptor-assets/lathrop/nebula_brown.png" width="750" height="300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2017 by
                <a href="#">Start Bootstrap</a>
            </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>


    <?php $__env->stopSection(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\playground\new-cms-project\resources\views/home.blade.php ENDPATH**/ ?>