

<?php $__env->startSection('content'); ?>

<script>
    let navbar = document.querySelector("nav");
    navbar.style.transform =" translateY(0)";
</script>


<script defer src="<?php echo e(asset('js/shop.js')); ?>"></script>

<section class="shop-container">

    <div class="shop-description-container">
        <h2>Collection <?php echo e($head); ?></h2>
        <p><?php echo e($description); ?></p>
    </div>


    <div class="shop-filters-container">

        <div class="filters">   

            <?php if($sousCollec->count() > 0): ?>

                <?php $__currentLoopData = $sousCollec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                
                    <?php if($p->id == $sousCollectionId_slug): ?>
                        <a class="cate-button selected" disabled href=""><?php echo e($p->name); ?>

                        </a>                         
                    <?php else: ?>
                        <a class="cate-button" href="<?php echo e(route("collection/sousCollection", [
                                "collectionId_slug" => $p->collection_id,
                                "sousCollectionId_slug" => $p->id,
                            ])); ?>"><?php echo e($p->name); ?>

                        </a> 
                    <?php endif; ?>                    

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

            <?php endif; ?>

        </div>

        <div class="subcategories">                 

            <?php if($sousCatego->count() > 0): ?>

                <?php $__currentLoopData = $sousCatego; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($p->id == $sousCategorieId_slug): ?>
                        <a class="cate-button selected" href="">
                            <?php echo e($p->name); ?>

                        </a>
                    <?php else: ?>
                        <a class="cate-button" href="<?php echo e(route("collection/sousCollection/sousCategorie", [
                                "collectionId_slug" => $sousCollec[0]->collection_id,
                                "sousCollectionId_slug" => $p->sous_collection_id,
                                "sousCategorieId_slug" => $p->id
                            ])); ?>">
                            <?php echo e($p->name); ?>

                        </a>                         
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>

        </div>
        
    </div>

    <div class="shop">


        <?php if($products->count() > 0): ?>        

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <?php if($key == ""): ?>
                    <?php $__currentLoopData = $p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nullArticles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/collection/<?php echo e($nullArticles->collection_id); ?>/produit/<?php echo e($nullArticles->id); ?>" class="shop-item">
                            <div class="item-img" style="background-image: url('<?php echo e(asset($nullArticles->image)); ?>')" >
                            </div>
                                <p class="shop-item-name"><?php echo e($nullArticles->name); ?></p>
                                <p class="shop-item-price price"><?php echo e($nullArticles->price); ?> €</p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>

                    <a href="/collection/<?php echo e($p[0]->collection_id); ?>/produit/<?php echo e($p[0]->id); ?>" class="shop-item">
                        <div class="item-img" style="background-image: url('<?php echo e(asset($p[0]->image)); ?>')" >
                        </div>
                            <p class="shop-item-name"><?php echo e($p[0]->name); ?></p>
                            <p class="shop-item-price price"><?php echo e($p[0]->price); ?> €</p>
                    </a>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>

            <span class="error">Plus de produits dans cette collection</span>            
            
        <?php endif; ?>
        
    </div>
    <div class="links">

        <?php echo e($products->links('pagination::default')); ?>


    </div>



</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/new_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/new/couture/resources/views/shop.blade.php ENDPATH**/ ?>