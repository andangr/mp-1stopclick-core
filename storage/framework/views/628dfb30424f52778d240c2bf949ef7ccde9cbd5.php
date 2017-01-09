<?php $__env->startSection('title', 'Product'); ?>


<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
        <h2>Voucher Management</h2>
        
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Vouchers Table List</h5>

                    <button class="btn btn-primary btn-sm pull-right"  onclick="window.location='<?php echo e(url("vouchermg/create")); ?>'" >
                        <i class="fa fa-plus"></i> New
                    </button>
                </div>
                <div class="ibox-content">

                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8">
                        <thead>
                        <tr>

                            <th >Code</th>
                            <th>Name</th>
							<th>Disc %</th>
                            <th>Startdate</th>
                            <th>Enddate</th>
                            <th>MaxClaim</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voucher): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td><?php echo e($voucher->code); ?></td>
                            <td><?php echo e($voucher->name); ?></td>
							<td><?php echo e($voucher->disc); ?></td>
                            <td><?php echo e($voucher->startdate); ?></td>
                            <td><?php echo e($voucher->enddate); ?></td>
                            <td><?php echo e($voucher->maxclaim); ?></td>
                            <td>
                                <a href="/vouchermg/edit/<?php echo e($voucher->id); ?>" ><i class="fa fa-edit text-navy"></i></a>  
                                <a href='/vouchermg/delete/<?php echo e($voucher->id); ?>'><i class="fa fa-trash text-navy"></i></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>