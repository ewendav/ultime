

<?php $__env->startSection('content'); ?>

    <h1 class="admin-title">Edition <?php echo e($attribute_slug); ?></h1>

    <form method="POST" action="<?php echo e(route('admin/updateAttribute')); ?>" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>



        <div class="tab-admin">

            

                <?php $__currentLoopData = $attribute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <table class="admin-main-tab">

                    <tr class="admin-second-tabb bold">
                        <td >champ</td>
                        <td >valeur actuelle</td>
                        <td >champ de modification</td>
                    </tr>

                    <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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

                                            

                                            <option value="<?php echo e($item); ?>"></option>

                                        </select>
                                        <?php break; ?>
                                        

                                    <?php default: ?>
                                        <input style="resize: both; overflow:auto; width:100%; height:100%;" type="text" name="<?php echo e($key); ?>" value="<?php echo e($item); ?>">
                                        <?php break; ?>
                                        
                                <?php endswitch; ?>


                            
                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </table>

                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                


            <input class="bouton-couture" class="bouton-couture" type="submit" name="valider" value="Valider" >
                
        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/new_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/new/ultime/resources/views/admin/editAttribute.blade.php ENDPATH**/ ?>