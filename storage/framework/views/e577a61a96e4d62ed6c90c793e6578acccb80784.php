

<?php $__env->startSection('content'); ?>

<main>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7">
<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4"><b>Create New Invoice</b></h3></div>
    <div class="card-body">
        <form method="POST" action="<?php echo e(url('/insert-invoice')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Customer Name</label>
                        <input class="form-control py-4" name="customer" type="text" value="<?php echo e($customer->name); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Customer Email</label>
                        <input class="form-control py-4" name="email" type="text" value="<?php echo e($customer->email); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Company</label>
                        <input class="form-control py-4" name="company" type="text" value="<?php echo e($customer->company); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Address</label>
                        <input class="form-control py-4" name="address" type="text" value="<?php echo e($customer->address); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputState">Phone No.</label>
                        <input class="form-control py-4" name="phone" type="text" />
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Product Category</label>
                        <input class="form-control py-4" name="item" type="text" value="<?php echo e($product->category); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Product Name</label>
                        <input class="form-control py-4" name="name" type="text" value="<?php echo e($product->name); ?>" />
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Price (perUnit)</label>
                        <input class="form-control py-4" name="unit_price" type="text" value="<?php echo e($product->unit_price); ?>" />
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Quantity</label>
                        <input class="form-control py-4" name="quantity" type="text" value="<?php echo e($order->quantity); ?>" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Total Price</label>
                        <input class="form-control py-4" name="total" type="text" value="<?php echo e($product->unit_price * $order->quantity); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Payment</label>
                        <input class="form-control py-4" name="payment" type="text" placeholder="" />
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Gallery</label>
                        <input name="photo" type="file" />
                    </div>
                </div> -->
            </div>

            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Submit</button></div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albri\OneDrive\Documents\Inventory_Management_System\resources\views/Admin/add_invoice.blade.php ENDPATH**/ ?>