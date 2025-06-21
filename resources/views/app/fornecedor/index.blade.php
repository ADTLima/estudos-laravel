<h3>Fornecedor view</h3>

{{-- @dd($fornecedores);  --}}

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }} <br>
        Status: {{ $fornecedores[$i]['status']}} <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'nao informado' }} <br>
        Telefone: ({{ $fornecedores[s$i]['ddd'] ?? 'nao informado' }}) {{ $fornecedores[0]['telefone'] ?? 'nao informado' }} <br><br>
        <hr>
    @endfor
@endisset

teste teste
teste
teste