<?php $__env->startSection('content'); ?>
<div class="content">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('drink_create')): ?>
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="<?php echo e(route("admin.drinks.create")); ?>">
                    <?php echo e(trans('global.add')); ?> <?php echo e(trans('global.drink.title_singular')); ?>

                </a>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.drink.title_singular')); ?> <?php echo e(trans('global.list')); ?>

                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <?php echo e(trans('global.drink.fields.barista')); ?>

                                    </th>
                                    <th>
                                        <?php echo e(trans('global.drink.fields.drink_type')); ?>

                                    </th>
                                    <th>
                                        <?php echo e(trans('global.drink.fields.price')); ?>

                                    </th>
                                    <th>
                                        <?php echo e(trans('global.drink.fields.completed_at')); ?>

                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $drinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $drink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($drink->barista->name ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php echo e($drink->drink_type->name ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php echo e($drink->price ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php echo e($drink->completed_at ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('drink_delete')): ?>
                                                <a href="<?php echo e(route('admin.drinks.complete', $drink->id)); ?>"
                                                    class="btn btn-xs btn-primary">Complete</a>

                                                <form action="<?php echo e(route('admin.drinks.destroy', $drink->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                                </form>
                                            <?php endif; ?>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>