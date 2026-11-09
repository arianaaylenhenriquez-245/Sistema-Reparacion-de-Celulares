<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida | REPARA 360</title>
    <link rel="stylesheet" href="{{ asset('css/acceso.css') }}">
</head>
<body>

    <main class="pagina-acceso bienvenida">

        <section class="presentacion">
            <div class="texto-marca">
                <div class="logo-letra" aria-hidden="true">R</div>

                <h1>REPARA 360</h1>

                <p class="subtitulo-marca">
                    Sistema de gestión de reparaciones
                </p>

                <p class="descripcion-marca">
                    Organizá clientes, equipos, órdenes y presupuestos.
                </p>
            </div>

            <p class="pie-marca">
                PRÁCTICA PROFESIONAL III · 2026
            </p>
        </section>

        <section class="zona-acceso">
            <div class="contenido-bienvenida">
                <h2>¡Bienvenido!</h2>

                <p class="frase-bienvenida">
                    Tu taller, mejor organizado.
                </p>

                <p class="descripcion-bienvenida">
                    Administrá el seguimiento de cada reparación
                    desde un único lugar.
                </p>

                <a href="{{ route('login') }}" class="boton-comenzar">
                    Comenzar →
                </a>

                <p class="ayuda-bienvenida">
                    Continuar al inicio de sesión
                </p>
            </div>
        </section>

    </main>

</body>
</html>