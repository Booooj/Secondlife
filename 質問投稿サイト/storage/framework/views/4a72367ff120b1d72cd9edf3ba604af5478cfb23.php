 
<?php $__env->startSection('title', '質問投稿'); ?>
 
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php $__env->startSection('content'); ?>
<div class="text">
<h1 style="padding:20px"> 質問を投稿する</h1>
<form method="post" action="<?php echo e(url('/posts')); ?>">
  <?php echo e(csrf_field()); ?>

  タイトル
  <p>
    <input type="text" name="title" value="<?php echo e(old('title')); ?>">
    <?php if($errors->has('title')): ?>
    <span><?php echo e($errors->first('title')); ?></span>
    <?php endif; ?>
  </p>
  質問内容
  <p>
    <textarea name="content"><?php echo e(old('content')); ?></textarea>
    <?php if($errors->has('content')): ?>
    <span><?php echo e($errors->first('content')); ?></span>
    <?php endif; ?>
  </p>
  <p>
  　<input type="submit"value="投稿" class="btn btn-success btn-sm">
  <a class="btn btn-warning btn-sm" href="<?php echo e(url('/home')); ?>">キャンセル </a>
</form>
</div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cdgam\Desktop\github\QAサイト\resources\views/posts/new.blade.php ENDPATH**/ ?>