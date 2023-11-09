<?php $__env->startSection('content'); ?>
    <script defer src="<?php echo e(asset('js/shop.js')); ?>"></script>
    <div id="" class="big-image-shop-container panier-header">

        <div class="shop-description-container panier-header">
            <h2>Panier </h2>
        </div>
        <div class="little-line"></div>
    </div>

    <section class="panier">





        <?php if(session()->get('cart', []) !== []): ?>

            <table class="panier-tab">

                <tr class="panier-tab-header">
                    <td><?php echo e(session()->get('cart') > 1 ? "Produits" : "Produit"); ?></td>
                    <td></td>
                    <td>Prix</td>
                </tr>

                <?php $__currentLoopData = session()->get('cart', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr class="panier-spacer"></tr>

                    <tr class="panier-tab-ligne">

                        <td class="panier-tab-ligne-product">
                            <img class="panier-image" src="<?php echo e(asset($ligne["image"])); ?>" alt="">
                            <div>
                                <p class="panier-product-name"><?php echo e($ligne["name"]); ?></p>
                                <p ><?php echo e($ligne["taille"] !== null ? $ligne["taille"] : "Taille unique"); ?></p>
                            </div>

                        </td>

                        <td class="panier-tab-ligne-action">
                            <div>
                                <a href="<?php echo e(route("panier/supprimer",["productId_slug" => $ligne["id"]])); ?>" class="product-submit submit-panier supprimer-panier">Supprimer du panier</a>
                            </div>

                        </td>

                        <td class="panier-tab-ligne-price">

                            <p class="panier-product-name"> <?php echo e($ligne["price"]); ?> €</p>


                        </td>

                    </tr>

                    <tr class="panier-spacer"></tr>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

        <div class="panier-total">

            <p>Total : <?php echo e($total); ?>€</p>
            <p>Taxes & Livraisons calculées au paiement</p>

            <a class="product-submit submit-panier">Paiement</a>

        </div>


        <?php else: ?>

        <?php endif; ?>




    </section>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/new_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/new/ultime/resources/views/panier.blade.php ENDPATH**/ ?>