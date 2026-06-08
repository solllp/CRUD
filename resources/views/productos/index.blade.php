<!DOCTYPE html>
<html>

<head>
    <title>Productos</title>
</head>

<body>

    <h1>Lista de Productos</h1>

    <a href="/">
        Nuevo Producto
    </a>

    <br><br>

    @foreach($productos as $producto)

        <p>
            <strong>{{ $producto->nombre }}</strong>
            -
            Categoría: {{ $producto->categoria->nombre }}
            -
            ${{ $producto->precio }}
            -
            Stock: {{ $producto->stock }}

            <a href="/productos/eliminar/{{ $producto->id }}">
                Eliminar
            </a>

            -

            <a href="/productos/editar/{{ $producto->id }}">
                Editar
            </a>
        </p>

    @endforeach

</body>

</html>