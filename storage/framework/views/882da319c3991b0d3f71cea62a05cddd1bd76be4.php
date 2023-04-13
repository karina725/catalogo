<h3>Editar Pelicula</h3>
<form method="POST" action="/movies/update/<?php echo e($movie['id']); ?>">
    <?php echo csrf_field(); ?>
    <!--<?php echo method_field('PUT'); ?>-->
    <label>
        title<br>
        <input type="text" name="title" value="<?php echo e($movie['title']); ?>">
    </label>
    <br>
    <label>
        synopsis<br>
        <input type="text" name="synopsis" value="<?php echo e($movie['synopsis']); ?>">
    </label>
    <br>
    <label>
        year<br>
        <input type="text" name="year" value="<?php echo e($movie['year']); ?>">
    </label>
    <br>
    <label>
        cover<br>
        <input type="text" name="cover" value="<?php echo e($movie['cover']); ?>">
    </label>
    <br><br>
    <button>Guardar</button>
</form><?php /**PATH C:\xampp\htdocs\catalogo\resources\views/movies/edit.blade.php ENDPATH**/ ?>