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

            @if (session('exito'))
                <p role="status" style="color: #15803d;">
                    {{ session('exito') }}
                </p>
            @endif

            <div class="buscador">
                <label for="buscar">Buscar por nombre, DNI o teléfono</label>
                <input
                    type="search"
                    id="buscar"
                    placeholder="Buscador pendiente de habilitar"
                    disabled
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
                        @forelse ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->dni }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>
                                    <button type="button" class="accion" disabled>
                                        Editar
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    Todavía no hay clientes registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <section id="formulario-cliente" class="seccion-formulario">
                <h2>Formulario de cliente</h2>

                @if ($errors->any())
                    <div role="alert" style="color: #b91c1c;">
                        <p>Revisá los siguientes datos:</p>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form
                    class="formulario-clientes"
                    action="{{ route('clientes.store') }}"
                    method="POST"
                >
                    @csrf

                    <div class="campo">
                        <label for="nombre">Nombre y apellido</label>
                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            value="{{ old('nombre') }}"
                            maxlength="100"
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
                            value="{{ old('dni') }}"
                            maxlength="20"
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
                            value="{{ old('telefono') }}"
                            maxlength="30"
                            placeholder="Ingresar información"
                            required
                        >
                    </div>

                    <button type="submit" class="boton">
                        Guardar
                    </button>
                </form>
            </section>
        </section>
    </main>
</body>
</html>