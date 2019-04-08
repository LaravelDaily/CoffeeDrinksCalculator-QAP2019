<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.create')); ?> <?php echo e(trans('global.drink.title_singular')); ?>

                </div>
                <div class="panel-body">

                    <form action="<?php echo e(route("admin.drinks.store")); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group <?php echo e($errors->has('drink_type_id') ? 'has-error' : ''); ?>">
                            <label for="drink_type"><?php echo e(trans('global.drink.fields.drink_type')); ?></label>
                            <select name="drink_type_id" id="drink_type" class="form-control select2">
                                <?php $__currentLoopData = $drink_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $drink_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e((isset($drink) && $drink->drink_type ? $drink->drink_type->id : old('drink_type_id')) == $id ? 'selected' : ''); ?>>
                                        <?php echo e($drink_type); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('drink_type_id')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('drink_type_id')); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>