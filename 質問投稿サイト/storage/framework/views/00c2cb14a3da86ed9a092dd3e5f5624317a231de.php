 
<?php $__env->startSection('title', '質問編集ページ'); ?>
 
<?php echo $__env->make('layout.qaheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php $__env->startSection('content'); ?>
<div class="text">
<h1 style="padding:30px">
  質問内容を編集する
</h1>
<form method="post" action="<?php echo e(url('/posts', $post->id)); ?>">
  <?php echo e(csrf_field()); ?>

  タイトル
  <p>
    <input type="text" name="title" value="<?php echo e(old('title', $post->title)); ?>">
    <?php if($errors->has('title')): ?>
    <span><?php echo e($errors->first('title')); ?></span>
    <?php endif; ?>
  </p>
  質問内容
  <p>
    <textarea name="content"><?php echo e(old('content', $post->content)); ?></textarea>
    <?php if($errors->has('content')): ?>
    <span><?php echo e($errors->first('content')); ?></span>
    <?php endif; ?>
  </p>
  <p>
    <input type="submit" value="変更" class="btn btn-success btn-sm">
    <a href="<?php echo e(url('/home')); ?>"> <button class="btn btn-warning btn-sm">戻る</button></a>
  </p>
</form>
</div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.qafooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.qalayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cdgam\Desktop\QAサイト\resources\views/posts/edit.blade.php ENDPATH**/ ?>