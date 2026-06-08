<!DOCTYPE html>
<html>

<head>
    <title>Crear Producto</title>
</head>

<body>

    <h1>Nuevo Producto</h1>
    <h1>Nuevo Producto</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/productos" method="POST">
        @csrf

        <label>Nombre</label>
        <input type="text" name="nombre">

        <br><br>

        <label>Precio</label>
        <input type="number" step="0.01" name="precio">

        <br><br>

        <label>Stock</label>
        <input type="number" name="stock">

        <br><br>

        <label>Categoría</label>

        <select name="categoria_id">
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">
                {{ $categoria->nombre }}
            </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">
            Guardar
        </button>

    </form>

    <br>

    <a href="/productosGuardados">
        Ver productos
    </a>

</body>

</html>