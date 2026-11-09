<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuestos | REPARA 360</title>
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>

    @include('partes.menu')

    <main class="contenido">
        <header class="encabezado">
            <h1>Gestión de presupuestos</h1>
            <p>Servicio técnico / Panel administrativo</p>
        </header>

        <section class="panel">
            <div class="titulo-panel">
                <h2>Presupuestos</h2>

                <a href="#formulario-presupuesto" class="boton">
                    + Nuevo presupuesto
                </a>
            </div>

            <form id="formulario-presupuesto" class="formulario-presupuesto">

                <div class="campo campo-orden">
                    <label for="orden_id">Orden de reparación</label>

                    <select id="orden_id" name="orden_id" required>
                        <option value="">Seleccionar orden...</option>
                        <option value="81">ORD-00081</option>
                        <option value="80">ORD-00080</option>
                        <option value="79">ORD-00079</option>
                    </select>
                </div>

                <div class="costos-presupuesto">
                    <div class="campo">
                        <label for="repuestos">Costo de repuestos</label>
                        <input
                            type="number"
                            id="repuestos"
                            name="repuestos"
                            min="0"
                            step="0.01"
                            placeholder="0,00"
                        >
                    </div>

                    <div class="campo">
                        <label for="mano_obra">Mano de obra</label>
                        <input
                            type="number"
                            id="mano_obra"
                            name="mano_obra"
                            min="0"
                            step="0.01"
                            placeholder="0,00"
                        >
                    </div>

                    <div class="campo">
                        <label for="otros_costos">Otros costos</label>
                        <input
                            type="number"
                            id="otros_costos"
                            name="otros_costos"
                            min="0"
                            step="0.01"
                            placeholder="0,00"
                        >
                    </div>
                </div>

                <div class="total-presupuesto">
                    <span>TOTAL ESTIMADO</span>
                    <strong>$ 0,00</strong>
                </div>

                <div class="pie-presupuesto">
                    <div class="campo">
                        <label for="estado_presupuesto">
                            Estado del presupuesto
                        </label>

                        <select id="estado_presupuesto" name="estado">
                            <option value="pendiente">Pendiente</option>
                            <option value="aprobado">Aprobado</option>
                            <option value="rechazado">Rechazado</option>
                        </select>
                    </div>

                    <button type="button" class="boton" disabled>
                        Guardar presupuesto
                    </button>
                </div>

            </form>

            <p class="nota-panel">
                El presupuesto definitivo se confirma luego del diagnóstico.
            </p>
        </section>
    </main>

</body>
</html>