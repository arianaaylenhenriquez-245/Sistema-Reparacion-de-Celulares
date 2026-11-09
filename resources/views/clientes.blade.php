<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clientes | REPARA 360</title>

    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>
    @include('partes.menu')

    <main class="contenido">
        <header class="encabezado">
            <h1>Gestión de clientes</h1>
            <p>Servicio técnico / Panel administrativo</p>
        </header>

        <section class="panel">
            <div class="titulo-panel">
                <h2>Clientes registrados</h2>

                <a href="#formulario-cliente" class="boton">
                    + Nuevo cliente
                </a>
            </div>

            <div class="buscador">
                <label for="buscar">Buscar por nombre, DNI o teléfono</label>
                <input
                    type="search"
                    id="buscar"
                    placeholder="Buscar cliente..."
                >
            </div>

            <div class="contenedor-tabla">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre y apellido</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Ana López</td>
                            <td>40111222</td>
                            <td>3884123456</td>
                            <td>
                                <button type="button" class="accion" disabled>
                                    Editar
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>002</td>
                            <td>Juan Pérez</td>
                            <td>38123456</td>
                            <td>3884556677</td>
                            <td>
                                <button type="button" class="accion" disabled>
                                    Editar
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>003</td>
                            <td>María Díaz</td>
                            <td>42987654</td>
                            <td>3884001122</td>
                            <td>
                                <button type="button" class="accion" disabled>
                                    Editar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <section id="formulario-cliente" class="seccion-formulario">
                <h2>Formulario de cliente</h2>

                <form class="formulario-clientes">
                    <div class="campo">
                        <label for="nombre">Nombre y apellido</label>
                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Ingresar información"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="dni">DNI</label>
                        <input
                            type="text"
                            id="dni"
                            name="dni"
                            inputmode="numeric"
                            placeholder="Ingresar información"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="telefono">Teléfono</label>
                        <input
                            type="tel"
                            id="telefono"
                            name="telefono"
                            placeholder="Ingresar información"
                            required
                        >
                    </div>

                    <button type="button" class="boton" disabled>
                        Guardar
                    </button>
                </form>
            </section>
        </section>
    </main>
</body>
</html>