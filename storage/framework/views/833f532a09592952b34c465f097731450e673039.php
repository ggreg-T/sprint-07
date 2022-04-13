<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Exemple d'une application CRUD Laravel 8 - apcpedagogie.com</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="<?php echo e(route('produits.create')); ?>"> Créer un nouveau produit</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>Numéro</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td><?php echo e($produit->npro); ?></td>
            <td><?php echo e($produit->libelle); ?></td>
            <td><?php echo e($produit->prix); ?></td>
            <td><?php echo e($produit->qstock); ?></td>
            <td><?php echo e($produit->description); ?></td>
            <td>
                <form action="<?php echo e(route('produits.destroy',$produit->npro)); ?>" method="POST">

                    <a class="btn btn-outline-primary" href="<?php echo e(route('produits.show',$produit->npro)); ?>">Montrer</a>

                    <a class="btn btn-outline-success" href="<?php echo e(route('produits.edit',$produit->npro)); ?>">Éditer</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="d-flex justify-content-center pagination-lg">
    <?php echo $produits->links('pagination::bootstrap-4'); ?>

      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('produits.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yansub/LARAVEL/blog/resources/views/produits/index.blade.php ENDPATH**/ ?>