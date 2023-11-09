

<?php $__env->startSection('content'); ?>

    <h1 class="admin-title">Edition produit</h1>

    <form method="POST" action="<?php echo e(route('admin/updateProduct',$product[0])); ?>" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>

        

        <div  class="tab-admin">

            <table class="admin-main-tab">

                <tr class="admin-second-tabb bold">
                    <td >champ</td>
                    <td >valeur actuelle</td>
                    <td >champ de modification</td>
                </tr>

                <?php $__currentLoopData = $product[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr class="admin-second-tabb">
                        <td >
                            <?php echo e($key); ?>

                        </td>

                        <td>
                            <?php if($key == "image"): ?>

                            <img class="admin-img-bigview" src="<?php echo e(asset($item)); ?>" alt="">

                            <?php else: ?>
                            
                            <?php echo e($item); ?>

                
                            <?php endif; ?>
                        </td>

                        <td>

                            <?php switch($key):
                            case ("image"): ?>
                                <input type="file" name="<?php echo e($key); ?>" value="<?php echo e($item); ?>">
                                <?php break; ?>

                            <?php case ("id"): ?>
                                <p>non modifiable</p>
                                <?php break; ?>

                            <?php case ("collection_id"): ?>
                                <select name="<?php echo e($key); ?>" id="">      
                                    <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>

                                    
                                    <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyCollec => $colec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($colec->id); ?>">
                                            <?php echo e($colec->name); ?> - <?php echo e($colec->id); ?>

                                        </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </select>
                                <?php break; ?>

                            <?php case ("sous_collection_id"): ?>
                                <select name="<?php echo e($key); ?>" id="">  
                                    <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>

                                    
                                    <?php $__currentLoopData = $sousCollec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyCollec => $colec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                        <option value="<?php echo e($colec->id); ?>">
                                            <?php echo e($colec->name); ?> - <?php echo e($colec->id); ?>

                                        </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </select>
                                <?php break; ?>

                            <?php case ("sous_categorie_id"): ?>
                                <select name="<?php echo e($key); ?>" id="">    
                                    <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                                    
                                    <?php $__currentLoopData = $sousCatego; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyCollec => $colec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                        <option value="<?php echo e($colec->id); ?>">
                                            <?php echo e($colec->name); ?> - <?php echo e($colec->id); ?>

                                        </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </select>
                                <?php break; ?>

                            <?php case ("price"): ?>
                                <input type="number" name="<?php echo e($key); ?>" value="<?php echo e($item); ?>">
                                
                                <?php break; ?>
                                

                            <?php case ("active"): ?>
                                    <select name="<?php echo e($key); ?>">
                                        <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>

                                        <option value="0">Produit actif</option>    
                                        <option value="1">Produit non actif</option>                                        
                                    </select>                                    
                                <?php break; ?>

                            <?php case ("size"): ?>
                                <select name="<?php echo e($key); ?>"> 
                                    <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>

                                    <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyCollec => $colec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($colec->id); ?>">
                                            <?php echo e($colec->name); ?>

                                        </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                                <?php break; ?>

                            <?php case ("variante"): ?>
                                <select name="<?php echo e($key); ?>" id="">      
                                    <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>

                                    <?php $__currentLoopData = $variante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyCollec => $colec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                        <option value="<?php echo e($colec->id); ?>">
                                            <?php echo e($colec->name); ?> - <?php echo e($colec->id); ?>

                                        </option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </select>
                                <?php break; ?>

                            <?php default: ?>
                                <input style="resize: both; overflow:auto; width:100%; height:100%;" type="text" name="<?php echo e($key); ?>" value="<?php echo e($item); ?>">
                                <?php break; ?>
                                
                        <?php endswitch; ?>

                        
                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr class="admin-second-tabb">
                        <td >
                            <?php echo e($key); ?>

                        </td>

                        <td>
            
                            <img class="admin-img-bigview" src="<?php echo e(asset($item)); ?>" alt="">
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

            <input class="bouton-couture" class="bouton-couture" type="submit" name="valider" value="Valider" >
                
        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/new_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/new/ultime/resources/views/admin/editProduct.blade.php ENDPATH**/ ?>