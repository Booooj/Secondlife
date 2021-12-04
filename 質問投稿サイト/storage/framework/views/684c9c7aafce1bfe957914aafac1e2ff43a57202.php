<?php $__env->startSection('title', '質問投稿サイト'); ?>
 
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php $__env->startSection('content'); ?>
<div class="text">
<h1> 質問一覧</h1>
<a href="<?php echo e(url('/new')); ?>">質問を投稿する</a>
</div>
  <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <div class="card">
  <table class="table table-striped">
    <tbody>
        <tr>
	  <td> タイトル
      <p> <a href="<?php echo e(action('PostsController@show', $post)); ?>"><?php echo e($post->title); ?></a></p>
    本文
    <p><?php echo e($post->content); ?> </p>
    <div style="text-align: right">
    <p><span>回答：<?php echo e($post->answers->count()); ?>件</span></p>
    <?php if($post->user_id == Auth::id()): ?>
    <a href="<?php echo e(action('PostsController@edit', $post)); ?>"> <button class="btn btn-success">編集</button></a>
    <form method="POST" action="<?php echo e(action('PostsController@destroy', $post->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-warning">削除</button>
    </form></td>
    <?php endif; ?>
</tr>
</tbody>
   </table>
</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <li>まだ質問はありません</li>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cdgam\Desktop\github\QAサイト\resources\views/posts/index.blade.php ENDPATH**/ ?>