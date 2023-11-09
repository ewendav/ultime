

<?php $__env->startSection('content'); ?>

<a class="bouton-couture admin-button-back  " href="<?php echo e(route("dashboard")); ?>">retour au dashboard</a>
<a class="bouton-couture admin-button-right   " href="<?php echo e(route("admin/createProduct")); ?>">ajouter <br> un produit</a>

<h1  class="admin-title">Visualisation produits</h1>
    <div class="tab-admin">
    

        <table class="admin-main-tab">

            <tr class="admin-second-tab" >
                <td>image</td>
                <td>id</td>
                <td>collection</td>
                <td>sous collection</td>
                <td>sous catégorie</td>
                <td>nom</td>
                <td>prix</td>
                <td>éditer</td>
                <td>supprimer</td>
            </tr>

            <?php $__currentLoopData = $prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="admin-second-tab">
                    <td>
                        <img class="admin-img-bigview" src="<?php echo e(asset($p["image"])); ?>" alt="">

                    </td>
                    <td>
                        <?php echo e($p["id"]); ?>

                    </td>

                    <td>
                        <?php echo e($p["collection_id"]); ?>



                    </td>

                    <td>
                        <?php echo e($p["sous_collection_id"]); ?>


                    </td>

                    <td>
                        <?php echo e($p["sous_categorie_id"]); ?>


                    </td>
                    <td>
                        <?php echo e($p["name"]); ?>


                    </td>

                    <td>
                        <?php echo e($p["price"]); ?>€
                    </td>

                    <td>
                        <a class="bouton-couture small" href="<?php echo e(route("admin/editProduct", [
                                "product_id_slug" => $p["id"],
                            ])); ?>">editer</a>
                    </td>

                    <td>
                        <a class="bouton-couture small red" href="<?php echo e(route("admin/destroyProduct", [
                                "product_id_slug" => $p["id"],
                            ])); ?>">supprimer</a>
                    </td>


                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/new_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/new/ultime/resources/views/admin/product.blade.php ENDPATH**/ ?>