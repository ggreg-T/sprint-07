<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Ajouter un nouveau produit</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-outline-primary" href="<?php echo e(route('produits.index')); ?>"> Retour</a>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('produits.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Numéro produit:</strong>
                <input type="text" name="npro" class="form-control" placeholder="Saisir un numéro">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Libellé:</strong>
                <input type="text" name="libelle" class="form-control" placeholder="Saisir un libellé">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Prix:</strong>
                <input type="text" name="prix" class="form-control" placeholder="Saisir un prix">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Qté stock:</strong>
                <input type="text" name="qstock" class="form-control" placeholder="Saisir un stock">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
    </div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('produits.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yansub/LARAVEL/blog/resources/views/produits/create.blade.php ENDPATH**/ ?>