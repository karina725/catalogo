<h3>Editar Pelicula</h3>
<form method="POST" action="/movies/update/{{$movie['id']}}">
    @csrf
    <!--@method('PUT')-->
    <label>
        title<br>
        <input type="text" name="title" value="{{$movie['title']}}">
    </label>
    <br>
    <label>
        synopsis<br>
        <input type="text" name="synopsis" value="{{$movie['synopsis']}}">
    </label>
    <br>
    <label>
        year<br>
        <input type="text" name="year" value="{{$movie['year']}}">
    </label>
    <br>
    <label>
        cover<br>
        <input type="text" name="cover" value="{{$movie['cover']}}">
    </label>
    <br><br>
    <button>Guardar</button>
</form>