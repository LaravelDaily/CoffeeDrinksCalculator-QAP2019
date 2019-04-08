<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.create')); ?> <?php echo e(trans('global.drinksType.title_singular')); ?>

                </div>
                <div class="panel-body">

                    <form action="<?php echo e(route("admin.drinks-types.store")); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo e(trans('global.drinksType.fields.name')); ?></label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($drinksType) ? $drinksType->name : '')); ?>">
                            <?php if($errors->has('name')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('name')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.drinksType.fields.name_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('price') ? 'has-error' : ''); ?>">
                            <label for="price"><?php echo e(trans('global.drinksType.fields.price')); ?></label>
                            <input type="number" id="price" name="price" class="form-control" value="<?php echo e(old('price', isset($drinksType) ? $drinksType->price : '')); ?>" step="0.01">
                            <?php if($errors->has('price')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('price')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.drinksType.fields.price_helper')); ?>

                            </p>
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