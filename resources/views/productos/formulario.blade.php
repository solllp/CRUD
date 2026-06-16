<!DOCTYPE html>
<html>

<head>
    <title>Crear Producto</title>
</head>

<body>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        min-height: 100vh;
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    h1 {
        color: #ffffff;
        font-size: 2rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
        letter-spacing: 2px;
        text-transform: uppercase;
        text-shadow: 0 0 20px rgba(226, 44, 114, 0.6);
    }

    h1::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #e22c72, #ff6b6b);
        margin: 10px auto 0;
        border-radius: 2px;
    }

    /* Contenedor del formulario */
    form {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 40px 50px;
        width: 100%;
        max-width: 480px;
        box-shadow:
            0 25px 50px rgba(0, 0, 0, 0.4),
            0 0 0 1px rgba(226, 44, 114, 0.15),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    /* Errores de validación */
    div > ul {
        background: rgba(226, 44, 114, 0.15);
        border: 1px solid rgba(226, 44, 114, 0.4);
        border-left: 4px solid #e22c72;
        border-radius: 10px;
        padding: 14px 18px;
        margin-bottom: 20px;
        max-width: 480px;
        width: 100%;
    }

    div > ul li {
        color: #ff8fab;
        font-size: 0.875rem;
        list-style: none;
        padding: 2px 0;
    }

    div > ul li::before {
        content: '⚠ ';
    }

    /* Grupos de campo */
    label {
        display: block;
        color: #a0aec0;
        font-size: 0.78rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        margin-top: 22px;
    }

    label:first-of-type {
        margin-top: 0;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 10px;
        color: #ffffff;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
    }

    input[type="text"]::placeholder,
    input[type="number"]::placeholder {
        color: rgba(255, 255, 255, 0.25);
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    select:focus {
        border-color: #e22c72;
        background: rgba(226, 44, 114, 0.08);
        box-shadow: 0 0 0 3px rgba(226, 44, 114, 0.2);
    }

    select {
        cursor: pointer;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23a0aec0' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        padding-right: 40px;
    }

    select option {
        background: #16213e;
        color: #ffffff;
    }

    /* Eliminar br innecesarios visualmente */
    br { display: none; }

    /* Botón */
    .btnC {
        display: block;
        width: 100%;
        margin-top: 30px;
        padding: 14px 20px;
        background: linear-gradient(135deg, #e22c72, #ff6b6b);
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 6px 20px rgba(226, 44, 114, 0.4);
    }

    .btnC:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 28px rgba(226, 44, 114, 0.6);
        background: linear-gradient(135deg, #ff3d82, #ff7c7c);
    }

    .btnC:active {
        transform: translateY(0);
        box-shadow: 0 4px 12px rgba(226, 44, 114, 0.4);
    }

    /* Enlace */
    a {
        display: inline-block;
        margin-top: 20px;
        color: #a0aec0;
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.2s;
    }

    a:hover {
        color: #e22c72;
    }

    a::before {
        content: '← ';
    }
</style>


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

        <button type="submit" class="btnC">
            Guardar
        </button>

    </form>

    <br>

    <a href="/productosGuardados">
        Ver productos
    </a>

</body>

</html>