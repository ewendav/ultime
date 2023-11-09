<?php if($paginator->hasPages()): ?>
    <nav class="pagination-container" >
        <ul class="pagination">
            
            <?php if($paginator->onFirstPage()): ?>

            <?php else: ?>
                    <a class="pagination-item" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">&lsaquo;&ensp;Précédent</a>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="disabled" aria-disabled="true"><span><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>

                <?php for($i = -2; $i < 0; $i++): ?>

                        <?php if(isset($element[$paginator->currentPage()+$i])): ?>

                            <?php
                                $url = array_values($element)[$paginator->currentPage()+$i-1];
                                $page = array_keys($element)[$paginator->currentPage()+$i-1];
                            ?>

                            <?php if($page == $paginator->currentPage()): ?>   
                                <li class="active pagination-item" aria-current="page">
                                    <span><?php echo e($page); ?>

                                    </span>
                                </li>

                            <?php else: ?>
                                <a class="pagination-item" href="<?php echo e($url); ?>">
                                    <?php echo e($page); ?>

                                </a>

                            <?php endif; ?>  

                        <?php endif; ?> 

                        
                    <?php endfor; ?>


                    <?php for($i = 0; $i < 3; $i++): ?>                    

                        <?php if(isset($element[$paginator->currentPage()+$i])): ?>

                            <?php
                                $url = array_values($element)[$paginator->currentPage()+$i-1];
                                $page = array_keys($element)[$paginator->currentPage()+$i-1];

                            ?>

                            <?php if($page == $paginator->currentPage()): ?>   
                                <li class="active pagination-item-active" aria-current="page">
                                    <span><?php echo e($page); ?></span>
                                </li>

                            <?php else: ?>
                        
                                    <a class="pagination-item" href="<?php echo e($url); ?>">
                                        <?php echo e($page); ?>

                                    </a>
                                

                            <?php endif; ?>  
                            
                        <?php endif; ?> 

                        
                    <?php endfor; ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                    <a class="pagination-item" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">Suivant&ensp;&rsaquo;</a>
            <?php else: ?>

            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/new/ultime/resources/views/vendor/pagination/default.blade.php ENDPATH**/ ?>