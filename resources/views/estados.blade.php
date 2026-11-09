<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estados | REPARA 360</title>

    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>

    @include('partes.menu')

    <main class="contenido">

        <header class="encabezado">
            <h1>Seguimiento de estados</h1>
            <p>Servicio técnico / Panel administrativo</p>
        </header>

        <section class="panel">

            <div class="titulo-panel">
                <h2>Seguimiento de reparaciones</h2>

                <button type="button" class="boton" disabled>
                    Actualizar estado
                </button>
            </div>

            <section class="flujo-estados">
                <h2>Estados del flujo</h2>

                <ul class="lista-estados">
                    <li>Recibido</li>
                    <li>Diagnóstico</li>
                    <li>Esperando aprobación</li>
                    <li>Esperando repuesto</li>
                    <li class="estado-destacado">En reparación</li>
                    <li>Finalizado</li>
                    <li>Entregado</li>
                </ul>
            </section>

            <section class="historial-estados">
                <h2 class="titulo-tabla">Historial de estados</h2>

                <div class="contenedor-tabla">
                    <table>
                        <thead>
                            <tr>
                                <th>Orden</th>
                                <th>Estado anterior</th>
                                <th>Nuevo estado</th>
                                <th>Fecha</th>
                                <th>Observación</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>00080</td>
                                <td>Recibido</td>
                                <td>Diagnóstico</td>
                                <td>08/10/26</td>
                                <td>Revisión iniciada</td>
                            </tr>

                            <tr>
                                <td>00079</td>
                                <td>Diagnóstico</td>
                                <td>En reparación</td>
                                <td>07/10/26</td>
                                <td>Repuesto disponible</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </section>
    </main>

</body>
</html>