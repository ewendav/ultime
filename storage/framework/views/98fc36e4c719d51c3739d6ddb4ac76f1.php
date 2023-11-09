

<?php $__env->startSection('content'); ?>
    <script defer src="<?php echo e(asset('js/shop.js')); ?>"></script>

    <input type="hidden" class="jsSelector" value="product">


<div class="product-container">

    <div class="product-imgs">
        <a target="_blank" href="<?php echo e($product->image); ?>">

            <img src="<?php echo e(asset($product->image)); ?>" alt="">

        </a>


        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a target="_blank" href="<?php echo e(asset($i->url)); ?>">
                <img src="<?php echo e(asset($i->url)); ?>" alt="">

            </a>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <div class="product-details">

            <div class="product-details-high">
                <p class="product-title"><?php echo e($product->name); ?></p>

                <p class="product-price"><?php echo e($product->price); ?> EUR</p>

                <p class="product-description"><?php echo e($product->description); ?></p>
            </div>


            <form id="product-form" class="product-form" action="" method="GET">

                <?php echo csrf_field(); ?>

                <?php if($sizes != null): ?>
                <div class="product-line"></div>

                <div class="margin-inline">

                    <p class="product-details-taille-header" >Tailles : </p>
                    <div class="product-details-taille">


                        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="product-details-taille-choice-container">
                                    <input id="taille-choice<?php echo e($key); ?>"  class="product-details-taille-choice" type="radio" name="product-size" value="<?php echo e($value); ?>">
                                    <label class="taille-choice-label" for="taille-choice<?php echo e($key); ?>"><?php echo e($key); ?></label>
                                </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>

                <?php else: ?>

                    <input name="product-size" type="hidden" checked="true" value="<?php echo e($product->id); ?>">

                <?php endif; ?>
                <p class="size-warning taille">Vous devez sélectioner une taille</p>

                    <?php if($variantes != null): ?>
                        <div class="product-line"></div>

                <div class="margin-inline">
                        <p class="product-details-taille-header" >Variantes : </p>
                        <div class="product-details-taille">



                            <?php $__currentLoopData = $variantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <div class="product-details-taille-choice-container">
                                    <input id="variante-choice<?php echo e($v->id); ?>" class="product-details-taille-choice" type="radio" name="product-size">
                                    <label class="variante-choice-label variante-selected" for="variante-choice<?php echo e($v->id); ?>">
                                        <a href="<?php echo e(route("produit",[
                                                    "collectionId_slug" => $v->collection_id,
                                                    "produitId_slug" => $v->id,
                                                ])); ?>">
                                        <img class="variante-image" src="<?php echo e(asset($v->image)); ?>" alt="">
                                        </a>
                                    </label>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                </div>
                    <?php endif; ?>

                    <div class="product-line"></div>

                    <div class="product-submit margin-inline" >
                        Ajouter au panier
                    </div>
                <p class="size-warning erreur">Erreur inatendue</p>


            </form>

        <div class="product-line no-mb"></div>


        <div class="product-extra-description-container">

            <div class="product-extra-header margin-inline">
                <p>Description</p>
                <p class="plus">+</p>
            </div>

            <div class="innerHTML" >
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
                <p>dcfefverfe</p>
            </div>

        </div>

        <div class="product-line no-mt"></div>

        <div class="product-line no-mb no-mt"></div>

        <div class="product-extra-livraison-container ">

            <div class="product-extra-header margin-inline">
                <p>Livraison</p>
                <p class="plus">+</p>
            </div>

            <div class="innerHTML" >
                <ul>
                    <li>Livraison en main propre sur nantes</li>
                    <li>Envoi posssible à la charge du client</li>
                </ul>
            </div>

        </div>

        <div class="product-line no-mt"></div>






    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/new_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/new/ultime/resources/views/product.blade.php ENDPATH**/ ?>