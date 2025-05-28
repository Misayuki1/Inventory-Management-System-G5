
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Available Products
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Unit Price</th>
                        <th>Sales Unit Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->product_code); ?></td>
                        <td><?php echo e($row->name); ?></td>
                        <td><?php echo e($row->category); ?></td>
                        
                        <?php if($row->stock > '0'): ?>
                            <td><?php echo e($row->stock); ?></td>
                        <?php else: ?>
                            <td>Not Available</td>
                        <?php endif; ?>

                        <td><?php echo e($row->unit_price); ?></td>
                        <td><?php echo e($row->sales_unit_price); ?></td>
                        <td>
                        	<a href="<?php echo e('add-order/'.$row->id); ?>" class="btn btn-sm btn-info">Order</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albri\OneDrive\Documents\Inventory_Management_System\resources\views/Admin/available_products.blade.php ENDPATH**/ ?>