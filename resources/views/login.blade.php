<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | REPARA 360</title>
    <link rel="stylesheet" href="{{ asset('css/acceso.css') }}">
</head>
<body>

    <main class="pagina-acceso login">

        <section class="presentacion">
            <div class="texto-marca">
                <h1>REPARA 360</h1>

                <p class="subtitulo-marca">
                    Control inteligente de reparaciones
                </p>
            </div>
        </section>

        <section class="zona-acceso">
            <div class="contenido-login">

                <h2>Acceso al sistema</h2>

                <form onsubmit="return false;">
                    <div class="campo-acceso">
                        <label for="usuario">Usuario</label>
                        <input
                            type="text"
                            id="usuario"
                            name="usuario"
                            placeholder="Ingresar usuario"
                            autocomplete="username"
                            required
                        >
                    </div>

                    <div class="campo-acceso">
                        <label for="password">Contraseña</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            autocomplete="current-password"
                            required
                        >
                    </div>

                    <div class="recuperar-acceso">
                        <button type="button" disabled>
                            ¿Olvidaste tu contraseña?
                        </button>
                    </div>

                    <button type="button" class="boton-ingresar" disabled>
                        Iniciar sesión
                    </button>
                </form>

                <p class="nota-acceso">
                    Acceso exclusivo para administrador y técnico
                </p>

                <p class="nota-acceso">
                    Ingresá con las credenciales asignadas al personal.
                </p>

            </div>
        </section>

    </main>

</body>
</html>