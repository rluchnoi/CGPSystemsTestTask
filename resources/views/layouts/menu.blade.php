<li class="nav-item">
    <a href="{{ route('companies.index') }}" class="nav-link {{ Request::is('companies') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Companies</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('clients.index') }}" class="nav-link {{ Request::is('clients') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Clients</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tokens.get') }}" class="nav-link {{ Request::is('tokens') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tokens</p>
    </a>
</li>