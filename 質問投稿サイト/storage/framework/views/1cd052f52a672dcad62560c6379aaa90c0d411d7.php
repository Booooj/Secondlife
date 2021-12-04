 
<?php $__env->startSection('title', '質問投稿サイト'); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php $__env->startSection('content'); ?>

<h1 class="text">
<div style="padding:70px">
  Q＆Aサイト
</div>
 <p>様々なことを質問しよう！！</p>
 <a href="<?php echo e(url('/home')); ?>">質問を新規投稿</a>
</h1>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cdgam\Desktop\github\QAサイト\resources\views/home/top.blade.php ENDPATH**/ ?>