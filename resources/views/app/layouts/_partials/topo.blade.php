<div class="topo">

    <div class="logo" style="display:inline-block;">
        <img src="{{ asset('img/logo.png') }}">
        {{ print_r($_SESSION['nome'])}}
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Principal</a></li>
            <li><a href="{{ route('app.cliente') }}">Cliente</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Fornecedor</a></li>
            <li><a href="{{ route('produto.index') }}">Produto</a></li>
            <li><a href="{{ route('app.sair') }}">Sair</a></li>
        </ul>
    </div>
</div>