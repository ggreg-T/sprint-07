<!DOCTYPE html>
<html>
<head>
    <title>CinémActus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<style>
body{
    background-color: #26BAEE;
}

.banniere{
    z-index: -1;
position: absolute;
width: 925px;
height: 90px;

top: 5px;


background: linear-gradient(269.37deg, #00BD56 0.76%, #F9FF00 98.49%);
border: 1px solid #B7B7B7;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}

.textcinemactus{

margin-left: 100px;
font-family: 'Dancing Script', cursive;
font-style:bold;
font-size: 60px;

}
.gridbanniere{
    display: grid;
    grid-template-columns: 50px auto 50px 50px ;
}

.imgping{
    margin-top: 9px;
    margin-left: 3px;
}

.buttonban{
    background: #26BAEE;
    border: 1px solid #C4C4C4;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}
</style>
</head>
<body>
<div>

<div class="container">

<div  class="banniere"></div> <div class="gridbanniere">
<div class="imgping">
<img src="<?php echo e(URL::asset('/image/cinema-penguin.png')); ?>" alt="profile Pic" height=auto width="75px"></div>
   <div class="textcinemactus">CinémActus</div>
   <div class="buttonban"></div>
   <div class="buttonban"></div>
</div>

<div class="container p-3 mt-4 border border-primary shadow-lg p-3 mb-5 rounded">
    <?php echo $__env->yieldContent('content'); ?>
</div>
</div>
</body>
</html>
<?php /**PATH /home/yansub/LARAVEL/blog/resources/views/produits/layout.blade.php ENDPATH**/ ?>