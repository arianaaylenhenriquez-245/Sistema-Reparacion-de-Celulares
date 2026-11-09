<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reparaciones | REPARA 360</title>

    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>

    @include('partes.menu')

    <main class="contenido">

        <header class="encabezado">
            <h1>Órdenes de reparación</h1>
            <p>Servicio técnico / Panel administrativo</p>
        </header>

        <section class="panel">

            <div class="titulo-panel">
                <h2>Órdenes de trabajo</h2>

                <a href="#formulario-orden" class="boton">
                    + Nueva orden
                </a>
            </div>

            <div class="buscador buscador-orden">
                <label for="buscar-orden">Buscar número de orden</label>
                <input
                    type="search"
                    id="buscar-orden"
                    placeholder="ORD-00081"
                >
            </div>

            <div class="contenedor-tabla">
                <table>
                    <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Cliente</th>
                            <th>Dispositivo</th>
                            <th>Diagnóstico</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>00081</td>
                            <td>Ana López</td>
                            <td>Galaxy A54</td>
                            <td>Pendiente</td>
                            <td>Recibido</td>
                            <td>08/10</td>
                        </tr>

                        <tr>
                            <td>00080</td>
                            <td>Juan Pérez</td>
                            <td>iPhone 11</td>
                            <td>Módulo dañado</td>
                            <td>Diagnóstico</td>
                            <td>08/10</td>
                        </tr>

                        <tr>
                            <td>00079</td>
                            <td>María Díaz</td>
                            <td>Moto G52</td>
                            <td>Batería</td>
                            <td>Reparación</td>
                            <td>07/10</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <section id="formulario-orden" class="seccion-formulario">

                <h2>Crear orden de reparación</h2>

                <form>
                    <div class="formulario-orden">

                        <div class="campo">
                            <label for="equipo_id">Cliente / Equipo</label>

                            <select id="equipo_id" name="equipo_id" required>
                                <option value="">Seleccionar...</option>
                                <option value="1">Ana López / Galaxy A54</option>
                                <option value="2">Juan Pérez / iPhone 11</option>
                                <option value="3">María Díaz / Moto G52</option>
                            </select>
                        </div>

                        <div class="campo">
                            <label for="falla">Falla informada</label>

                            <input
                                type="text"
                                id="falla"
                                name="falla"
                                placeholder="Ingresar información"
                                required
                            >
                        </div>

                        <div class="campo">
                            <label for="fecha_estimada">Fecha estimada</label>

                            <input
                                type="date"
                                id="fecha_estimada"
                                name="fecha_estimada"
                            >
                        </div>

                    </div>

                    <div class="acciones-formulario">
                        <button type="button" class="boton" disabled>
                            Crear orden
                        </button>
                    </div>
                </form>

            </section>

        </section>
    </main>

</body>
</html>