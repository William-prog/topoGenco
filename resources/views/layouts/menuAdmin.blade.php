<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle">
        {{ __('Resumen Tecnico ') }} <span class="caret"><i class="fas fa-indent"></i></span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="/resumen" style="cursor: pointer">{{ __('Resumen General ') }}<i class="fas fa-align-justify"></i></a>
        </li>
        <li>
            <a href="/estadisticas" style="cursor: pointer">{{ __('Estadisticas ') }}<i class="fas fa-chart-bar"></i></a>
        </li>
    </ul>
</li>

<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle">
        {{ __('Registros ') }} <span class="caret"><i class="fas fa-clipboard-list"></i></span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="/servicio" style="cursor: pointer">{{ __('Servicio Transporte ') }}<i class="fas fa-list-alt"></i></a>
        </li>
        <li>
            <a href="/checkList" style="cursor: pointer">{{ __('CheckList ') }}<i class="fas fa-clipboard-check"></i></a>
        </li>
        <li>
            <a href="/horometro" style="cursor: pointer">{{ __('Horometros ') }}<i class="fas fa-business-time"></i></a>
        </li>
    </ul>
</li>

<li style="font-size: 12px;" class="dropdown">
    <a href="#" class="sub-menu-toggle">
        {{ __('Reportes ') }} <span class="caret"><i class="fas fa-indent"></i></span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="/servicio/create" style="cursor: pointer">{{ __('Servicio Transporte ') }}<i class="fas fa-list-alt"></i></a>
        </li>
        <li>
            <a href="/checkList/create" style="cursor: pointer">{{ __('CheckList ') }}<i class="fas fa-clipboard-check"></i></a>
        </li>
        <li>
            <a href="/horometro/create" style="cursor: pointer">{{ __('Horometros ') }}<i class="fas fa-business-time"></i></a>
        </li>
    </ul>
</li>