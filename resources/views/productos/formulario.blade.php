<!DOCTYPE html>
<html>

<head>
    <title>Crear Producto</title>
</head>

<body>

    <h1>Nuevo Producto</h1>

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

        <button type="submit">
            Guardar
        </button>

    </form>
    <a href="/productosGuardados">Ver productos</a>
</body>

</html>