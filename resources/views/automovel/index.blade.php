<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automoveis</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="conteiner">
        <h1 class="title">Automoveis</h1>

        <table>
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Placa</th>
                    <th>Ano de Fabricação</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                @foreach($automoveis as $automovel)
                <tr>
                    <td>{{$automovel->marca}}</td>
                    <td>{{$automovel->modelo}}</td>
                    <td>{{$automovel->cor}}</td>
                    <td>{{$automovel->placa}}</td>
                    <td>{{$automovel->fabricacao}}</td>
                    <td>
                        <form action="automovel/{{$automovel->id}}/edit" method="GET">
                            <button type="submit">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="automovel/{{$automovel->id}}" method="POST">
                            @csrf
                            <button type="submit">Excluir</button>
                            <input type="hidden" name="_method" value="DELETE" />
                        </form>
                    </td>
                </tr>
                @endforeach
            </thead>
        </table>
        <form action="automovel/create" method="GET">
            <button type="submit">Adicionar</button>
        </form>
    </div>
</body>

</html>