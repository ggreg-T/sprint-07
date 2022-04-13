<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Afficher le produit</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="<?php echo e(route('produits.index')); ?>"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro:</strong>
                <?php echo e($produit->npro); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Libellé:</strong>
                <?php echo e($produit->libelle); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                <?php echo e($produit->prix); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantité en stock:</strong>
                <?php echo e($produit->qstock); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <?php echo e($produit->description); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('produits.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yansub/LARAVEL/blog/resources/views/produits/show.blade.php ENDPATH**/ ?>