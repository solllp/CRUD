<!DOCTYPE html>
<html>

<head>
    <title>Productos</title>
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
        padding: 40px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
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

    /* Botón Nuevo Producto */
    a[href="/"] {
        display: inline-block;
        margin-bottom: 30px;
        padding: 12px 28px;
        background: linear-gradient(135deg, #e22c72, #ff6b6b);
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        box-shadow: 0 6px 20px rgba(226, 44, 114, 0.4);
        transition: all 0.3s ease;
    }

    a[href="/"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 28px rgba(226, 44, 114, 0.6);
    }

    a[href="/"]:before {
        content: '+ ';
    }

    .lista-productos {
        width: 100%;
        max-width: 700px;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    p {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 14px;
        padding: 18px 24px;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
        box-shadow:
            0 8px 24px rgba(0, 0, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.08);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        color: #cbd5e0;
        font-size: 0.95rem;
        line-height: 1.5;
    }

    p:hover {
        transform: translateY(-2px);
        box-shadow:
            0 14px 32px rgba(0, 0, 0, 0.4),
            0 0 0 1px rgba(226, 44, 114, 0.2);
    }

    p strong {
        color: #ffffff;
        font-size: 1.05rem;
        font-weight: 700;
        flex: 1 1 100%;
        margin-bottom: 4px;
    }

    p > br {
        display: none;
    }

    p a {
        text-decoration: none;
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: all 0.25s ease;
        margin-left: auto;
    }

    p a[href*="editar"] {
        background: rgba(99, 179, 237, 0.15);
        color: #63b3ed;
        border: 1px solid rgba(99, 179, 237, 0.3);
    }

    p a[href*="editar"]:hover {
        background: rgba(99, 179, 237, 0.3);
        box-shadow: 0 0 12px rgba(99, 179, 237, 0.3);
    }

    p a[href*="eliminar"] {
        background: rgba(226, 44, 114, 0.15);
        color: #fc8181;
        border: 1px solid rgba(226, 44, 114, 0.3);
    }

    p a[href*="eliminar"]:hover {
        background: rgba(226, 44, 114, 0.3);
        box-shadow: 0 0 12px rgba(226, 44, 114, 0.3);
    }

    br {
        display: none;
    }
</style>

<h1>Lista de Productos</h1>

<a href="/">
    Nuevo Producto
</a>

<div class="lista-productos">

    @foreach($productos as $producto)

        <p>
            <strong>{{ $producto->nombre }}</strong>

            Categoría: {{ $producto->categoria->nombre }}

            &nbsp;·&nbsp;

            ${{ $producto->precio }}

            &nbsp;·&nbsp;

            Stock: {{ $producto->stock }}

            <a href="/productos/editar/{{ $producto->id }}">
                Editar
            </a>

            <a href="/productos/eliminar/{{ $producto->id }}">
                Eliminar
            </a>
        </p>

    @endforeach

</div>

</body>

</html>