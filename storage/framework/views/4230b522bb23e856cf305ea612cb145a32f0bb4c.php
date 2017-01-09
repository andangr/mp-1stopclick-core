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

                    <button class="btn btn-primary btn-sm pull-right" >
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
                        <tr>
                            <td>voucher.code</td>
                            <td>voucher.name</td>
							<td>voucher.disc</td>
                            <td>voucher.startdate</td>
                            <td>voucher.enddate</td>
                            <td>voucher.maxclaim</td>
                            <td><i class="fa fa-edit text-navy"></i></td>
                        </tr>
                        
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