<h3>Fornecedores</h3>

Fornecedor: {{ $fornecedores[0]['nome']}}
<br>
Status: {{ $fornecedores[0]['status']}}

@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless