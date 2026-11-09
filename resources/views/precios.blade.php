<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precios | REPARA 360</title>
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>

    @include('partes.menu')

    <main class="contenido">
        <header class="encabezado">
            <h1>Tabla de precios</h1>
            <p>Servicio técnico / Panel administrativo</p>
        </header>

        <section class="panel">
            <div class="titulo-panel">
                <h2>Servicios y precios sugeridos</h2>

                <button type="button" class="boton" disabled>
                    + Nuevo servicio
                </button>
            </div>

            <div class="buscador">
                <label for="buscar-servicio">Buscar servicio</label>
                <input
                    type="search"
                    id="buscar-servicio"
                    placeholder="Pantalla, batería, pin de carga..."
                >
            </div>

            <div class="contenedor-tabla">
                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Servicio</th>
                            <th>Descripción</th>
                            <th>Precio sugerido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>SR-01</td>
                            <td>Cambio de pantalla</td>
                            <td>Mano de obra</td>
                            <td>$ 25.000</td>
                            <td>
                                <button type="button" class="accion" disabled>
                                    Editar
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>SR-02</td>
                            <td>Cambio de batería</td>
                            <td>Mano de obra</td>
                            <td>$ 18.000</td>
                            <td>
                                <button type="button" class="accion" disabled>
                                    Editar
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>SR-03</td>
                            <td>Cambio pin de carga</td>
                            <td>Mano de obra</td>
                            <td>$ 20.000</td>
                            <td>
                                <button type="button" class="accion" disabled>
                                    Editar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="nota-panel nota-precios">
                Los valores son ejemplos; no representan precios vigentes.
            </p>
        </section>
    </main>

</body>
</html>