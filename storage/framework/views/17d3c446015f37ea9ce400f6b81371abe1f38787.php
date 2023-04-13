<h3>Nueva Pelicula</h3>
<form method="POST" action="/movies/store">  
    <?php echo csrf_field(); ?>
    <label>
        title<br>
        <input type="text" name="title">
    </label>
    <br>
    <label>
        synopsis<br>
        <input type="text" name="synopsis">
    </label>
    <br>
    <label>
        year<br>
        <input type="text" name="year">
    </label>
    <br>
    <label>
        cover<br>
        <input type="text" name="cover">
    </label>
    <br><br>
    <button>Guardar</button>
</form><?php /**PATH C:\xampp\htdocs\catalogo\resources\views/movies/create.blade.php ENDPATH**/ ?>