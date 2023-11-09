<script defer src="<?php echo e(asset('js/shop.js')); ?>"></script>


<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->role == 1): ?>
                            <?php echo e(__("Page administrateur")); ?>


                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->role == 1): ?>
            <div class="admin-controlcenter">

                <div class="admin-controlcenter-left">

                    <a href="<?php echo e(route("admin/product")); ?>">modifier les produits</a>



                    <a href="<?php echo e(route("admin/editAttribute",[
                            "attribute_slug" => "descriptions",
                        ])); ?>">modifier les descriptions</a>


                </div>

                <div class="admin-controlcenter-left">

                    <a href="<?php echo e(route("admin/editAttribute",[
                            "attribute_slug"=>"collections",
                        ])); ?>">modifier les collections</a>

                    <a href="<?php echo e(route("admin/editAttribute",[
                            "attribute_slug"=>"sousCollections",
                        ])); ?>">modifier les sous collections</a>

                    <a href="<?php echo e(route("admin/editAttribute",[
                            "attribute_slug"=>"sousCategorie",
                        ])); ?>">modifier les sous catégorie</a>

                    <a href="<?php echo e(route("admin/editAttribute",[
                            "attribute_slug"=>"tailles",
                        ])); ?>">modifier les tailles</a>

                    <a href="<?php echo e(route("admin/editAttribute",[
                            "attribute_slug"=>"variantes",
                        ])); ?>">modifier les variantes</a>

                </div>


            </div>
        <?php endif; ?>
    <?php endif; ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/new/ultime/resources/views/dashboard.blade.php ENDPATH**/ ?>