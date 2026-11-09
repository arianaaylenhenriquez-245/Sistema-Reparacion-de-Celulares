 <aside class="menu-lateral">
        <div class="marca">
            <h2>REPARA 360</h2>
            <p>GESTIÓN TÉCNICA</p>
        </div>

        <nav>

            <a href="{{ route('principal') }}" class="{{ request()->is('principal') ? 'activo' : '' }}">
            ◫ &nbsp; Inicio</a>
            <a href="/clientes" class="{{ request()->is('clientes') ? 'activo' : '' }}">
            ♙ &nbsp; Clientes</a>
            <a href="/equipos" class="{{ request()->is('equipos') ? 'activo' : '' }}">
            ▣ &nbsp; Equipos</a>
            <a href="/reparaciones" class="{{ request()->is('reparaciones') ? 'activo' : '' }}">
             ▤ &nbsp; Reparaciones</a>
            <a href="/estados"
             class="{{ request()->is('estados') ? 'activo' : '' }}">
            ◉ &nbsp; Estados</a>
            <a href="/presupuestos" class="{{ request()->is('presupuestos') ? 'activo' : '' }}">
            ▥ &nbsp; Presupuestos</a>
            <a href="/precios" class="{{ request()->is('precios') ? 'activo' : '' }}">
             ≡ &nbsp; Precios</a>

        </nav>

        <p class="usuario">Administrador / Técnico</p>
    </aside>