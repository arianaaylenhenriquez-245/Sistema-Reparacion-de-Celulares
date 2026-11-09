<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Equipos | REPARA 360</title>

    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>
    @include('partes.menu')

    <main class="contenido">
        <header class="encabezado">
            <h1>Gestión de equipos</h1>
            <p>Servicio técnico / Panel administrativo</p>
        </header>

        <section class="panel">
            <div class="titulo-panel">
                <h2>Dispositivos ingresados</h2>

                <a href="#formulario-equipo" class="boton">
                    + Registrar equipo
                </a>
            </div>

            <form id="formulario-equipo" class="formulario-equipos">
                <div class="fila-equipo tres-columnas">
                    <div class="campo">
                        <label for="cliente_id">Cliente propietario</label>

                        <select id="cliente_id" name="cliente_id" required>
                            <option value="">Seleccionar cliente</option>
                            <option value="1">Ana López</option>
                            <option value="2">Juan Pérez</option>
                            <option value="3">María Díaz</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="marca">Marca</label>
                        <input
                            type="text"
                            id="marca"
                            name="marca"
                            placeholder="Samsung"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="modelo">Modelo</label>
                        <input
                            type="text"
                            id="modelo"
                            name="modelo"
                            placeholder="Galaxy A54"
                            required
                        >
                    </div>
                </div>

                <div class="fila-equipo datos-fisicos">
                    <div class="campo">
                        <label for="serie">IMEI / Serie</label>
                        <input
                            type="text"
                            id="serie"
                            name="serie"
                            placeholder="Ingresar información"
                        >
                    </div>

                    <div class="campo">
                        <label for="estado_fisico">Estado físico</label>
                        <input
                            type="text"
                            id="estado_fisico"
                            name="estado_fisico"
                            placeholder="Pantalla rayada, tapa en buen estado"
                        >
                    </div>
                </div>

                <div class="fila-equipo dos-columnas">
                    <div class="campo">
                        <label for="accesorios">Accesorios entregados</label>
                        <input
                            type="text"
                            id="accesorios"
                            name="accesorios"
                            placeholder="Funda, cargador..."
                        >
                    </div>

                    <div class="campo">
                        <label for="falla">Falla reportada</label>
                        <input
                            type="text"
                            id="falla"
                            name="falla"
                            placeholder="No carga..."
                            required
                        >
                    </div>
                </div>

                <div class="acciones-formulario">
                    <button type="button" class="boton" disabled>
                        Guardar equipo
                    </button>
                </div>
            </form>

            <h2 class="titulo-tabla">Últimos equipos</h2>

            <div class="contenedor-tabla">
                <table>
                    <thead>
                        <tr>
                            <th>Equipo</th>
                            <th>Cliente</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Falla</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>EQ-001</td>
                            <td>Ana López</td>
                            <td>Samsung</td>
                            <td>A54</td>
                            <td>No carga</td>
                        </tr>

                        <tr>
                            <td>EQ-002</td>
                            <td>Juan Pérez</td>
                            <td>Apple</td>
                            <td>iPhone 11</td>
                            <td>Pantalla rota</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>