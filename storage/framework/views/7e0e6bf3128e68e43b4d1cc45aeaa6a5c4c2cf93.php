<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="<?php echo e($chart1->options['column_class']); ?>">
                        <h3><?php echo $chart1->options['chart_title']; ?></h3>
                        <?php echo $chart1->renderHtml(); ?>

                    </div>
                    <div class="<?php echo e($chart2->options['column_class']); ?>">
                        <h3><?php echo $chart2->options['chart_title']; ?></h3>
                        <?php echo $chart2->renderHtml(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <?php echo $chart1->renderJs(); ?>

    <?php echo $chart2->renderJs(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>