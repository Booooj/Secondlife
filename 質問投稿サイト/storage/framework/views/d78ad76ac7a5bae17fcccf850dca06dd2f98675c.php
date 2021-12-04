<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php echo $__env->yieldContent('title'); ?></title>
<meta name="description" itemprop="description" content="<?php echo $__env->yieldContent('description'); ?>">
<meta name="keywords" itemprop="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
<!-- Custom styles for this template -->
<link href="/css/qa/sticky-footer.css" rel="stylesheet">
 
<?php echo $__env->yieldContent('page'); ?>
</head>
<body>
 
<?php echo $__env->yieldContent('header'); ?>
 
<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div><!--//container-->
 
<?php echo $__env->yieldContent('footer'); ?>
 
</body>
</html><?php /**PATH C:\Users\cdgam\Desktop\QAサイト\resources\views/layout/qalayout.blade.php ENDPATH**/ ?>