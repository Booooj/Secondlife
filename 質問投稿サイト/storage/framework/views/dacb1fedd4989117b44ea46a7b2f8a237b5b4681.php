 
<?php $__env->startSection('title', '詳細画面'); ?>
 
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php $__env->startSection('content'); ?>

<div style="padding:50px">
  <a href="<?php echo e(url('/home')); ?>" > ←戻る</a>
  <p>タイトル</p>
  <?php echo e($post->title); ?>

<p>本文</p>
<p><?php echo e($post->content); ?></p>
<h2>回答一覧</h2>
<ul>
  <?php $__empty_1 = true; $__currentLoopData = $post->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div style="padding:5px">
    <div style="box-shadow: 0 3px 7px #b8c4cc;">
    <?php echo e($answer->answer); ?>

</div>
</div>
  <p>
    <form method="POST" action="<?php echo e(action('AnswersController@destroy', [$post, $answer])); ?>" id="form_<?php echo e($answer->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-warning btn-sm">削除</button>
    </form>
</p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <li>まだ回答はありません。</li>
  <?php endif; ?>
</ul>
<form method="post" action="<?php echo e(action('AnswersController@store', $post)); ?>">
  <?php echo e(csrf_field()); ?>

  <p>
    <input type="text" name="answer">
    <?php if($errors->has('answer')): ?>
    <span><?php echo e($errors->first('answer')); ?></span>
    <?php endif; ?>
  </p>
  <p>
    <input type="submit" value="回答する" class="btn btn-success btn btn-sm">
  </p>
</form>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cdgam\Desktop\github\QAサイト\resources\views/posts/show.blade.php ENDPATH**/ ?>