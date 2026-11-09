<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> | REPARA 360</title>

    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>
  
    @include('partes.menu')
    <main class="contenido">
        <header class="encabezado">
            <h1>Bienvenido a mi Taller</h1>
            <p>Servicio técnico / Panel administrativo</p>
        </header>

        <section class="panel">
            <div class="titulo-panel">
                <h2>Resumen de actividad</h2>

                <a href="/reparaciones" class="boton">
                    + Nueva orden
                </a>
            </div>

            <div class="indicadores">
                <article class="tarjeta destacada">
                    <h3>Recibidos</h3>
                    <p>12</p>
                </article>

                <article class="tarjeta">
                    <h3>En diagnóstico</h3>
                    <p>5</p>
                </article>

                <article class="tarjeta">
                    <h3>En reparación</h3>
                    <p>8</p>
                </article>

                <article class="tarjeta">
                    <h3>Finalizados</h3>
                    <p>21</p>
                </article>
            </div>

            <h2 class="titulo-tabla">Órdenes recientes</h2>

            <div class="contenedor-tabla">
                <table>
                    <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Cliente</th>
                            <th>Equipo</th>
                            <th>Estado</th>
                            <th>Ingreso</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>#00081</td>
                            <td>Ana López</td>
                            <td>Samsung A54</td>
                            <td>Recibido</td>
                            <td>08/10/26</td>
                        </tr>

                        <tr>
                            <td>#00080</td>
                            <td>Juan Pérez</td>
                            <td>iPhone 11</td>
                            <td>Diagnóstico</td>
                            <td>08/10/26</td>
                        </tr>

                        <tr>
                            <td>#00079</td>
                            <td>María Díaz</td>
                            <td>Moto G52</td>
                            <td>En reparación</td>
                            <td>07/10/26</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>