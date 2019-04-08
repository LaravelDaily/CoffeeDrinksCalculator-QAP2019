<script>
  var ctx = document.getElementById("<?php echo e($options['chart_name'] ?? 'myChart'); ?>");
  var <?php echo e($options['chart_name'] ?? 'myChart'); ?> = new Chart(ctx, {
    type: '<?php echo e($options['chart_type'] ?? 'line'); ?>',
    data: {
      labels: [
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            "<?php echo e($group); ?>",
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      ],

      datasets: [{
        label: '<?php echo e($options['chart_title']); ?>',
        data: [
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $result; ?>,
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        <?php if($options['chart_type'] == 'pie'): ?>
        backgroundColor: [
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                'rgba(<?php echo e(rand(0,255)); ?>, <?php echo e(rand(0,255)); ?>, <?php echo e(rand(0,255)); ?>, 0.2)',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        <?php endif; ?>
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        xAxes: [],
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
