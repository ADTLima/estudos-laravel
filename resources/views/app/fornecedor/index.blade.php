<h3>Fornecedor view</h3>

{{-- @dd($fornecedores);  --}}

@isset($fornecedores)

    @forelse ($fornecedores as $i => $fornecedor)

        Interação: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'nao informado' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? 'nao informado' }}) {{ $fornecedor['telefone'] ?? 'nao informado' }}
        <br>
        <br>
        @if ($loop->first)
            Primeira iteração
            <br>
            
        @endif
        @if ($loop->last)
            Ultima iteração
            <br>
        @endif
        <hr>
        @if ($loop->last)
            Total de registros: {{ $loop->count }}
        @endif
        
    @empty
        
        <p>Nenhum fornecedor cadastrado.</p>

    @endforelse
@endisset