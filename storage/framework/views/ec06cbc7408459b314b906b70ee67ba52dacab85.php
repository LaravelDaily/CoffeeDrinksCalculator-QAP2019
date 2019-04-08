<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="<?php echo e(route("admin.home")); ?>">
                    <i class="fas fa-tachometer-alt">

                    </i>
                    <?php echo e(trans('global.dashboard')); ?>

                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="treeview">
                    <a>
                        <i class="fas fa-users">

                        </i>
                        <span><?php echo e(trans('global.userManagement.title')); ?></span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                            <li class="<?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route("admin.permissions.index")); ?>">
                                    <i class="fas fa-unlock-alt">

                                    </i>
                                    <span><?php echo e(trans('global.permission.title')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                            <li class="<?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route("admin.roles.index")); ?>">
                                    <i class="fas fa-briefcase">

                                    </i>
                                    <span><?php echo e(trans('global.role.title')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                            <li class="<?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route("admin.users.index")); ?>">
                                    <i class="fas fa-user">

                                    </i>
                                    <span><?php echo e(trans('global.user.title')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('drinks_type_access')): ?>
                <li class="<?php echo e(request()->is('admin/drinks-types') || request()->is('admin/drinks-types/*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route("admin.drinks-types.index")); ?>">
                        <i class="fas fa-cogs">

                        </i>
                        <span><?php echo e(trans('global.drinksType.title')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('drink_access')): ?>
                <li class="<?php echo e(request()->is('admin/drinks') || request()->is('admin/drinks/*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route("admin.drinks.index")); ?>">
                        <i class="fas fa-cogs">

                        </i>
                        <span><?php echo e(trans('global.drink.title')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-sign-out-alt">

                    </i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
        </ul>
    </section>
</aside>