<!DOCTYPE html>
<html>

<head>
      <title>Productos</title>
</head>

<body>

<form action="/productos/actualizar/{{ $producto->id }}" method="POST">
    @csrf
    @method('PUT')

    <input
        type="text"
        name="nombre"
        value="{{ $producto->nombre }}"
    >

    <input
        type="number"
        step="0.01"
        name="precio"
        value="{{ $producto->precio }}"
    >

    <input
        type="number"
        name="stock"
        value="{{ $producto->stock }}"
    >

    <button type="submit">
        Actualizar
    </button>
</form>
</body>

</html>