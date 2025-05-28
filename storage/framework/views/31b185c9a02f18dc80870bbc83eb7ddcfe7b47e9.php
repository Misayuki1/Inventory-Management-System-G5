
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Delivered Products
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Customer Email</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->id); ?></td>
                        <td><?php echo e($row->product_code); ?></td>
                        <td><?php echo e($row->product_name); ?></td>
                        <td><?php echo e($row->email); ?></td>
                        <td><?php echo e($row->quantity); ?></td>
                        <td>
                            <?php if($row->order_status=='0'): ?>
                                <a href="#" class="btn btn-sm btn-info">Pending</a>
                            <?php else: ?>
                                <a href="#" class="btn btn-sm btn-info">Delivered</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
                
            </table>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albri\OneDrive\Documents\Inventory_Management_System\resources\views/Admin/delivered_orders.blade.php ENDPATH**/ ?>