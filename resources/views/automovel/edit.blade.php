<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Automoveis</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="conteiner">
        <h1 class="title">Adicionar Automoveis</h1>
        <form action="/automovel/{{$automovel->id}}" method="POST">
            <label>Marca:<input type="text" name="marca" value="{{$automovel->marca}}" /></label>
            <label>Modelo:<input type="text" name="modelo" value="{{$automovel->modelo}}" /></label>
            <label>Cor:<input type="text" name="cor" value="{{$automovel->cor}}" /></label>
            <label>Placa:<input type="text" name="placa" value="{{$automovel->placa}}" /></label>
            <label>Ano de Fabricação:<input type="number" name="fabricacao" value="{{$automovel->fabricacao}}" /></label>
            <input type="hidden" name="_method" value="PUT" />
            @csrf
            <button type="submit">Salvar</button>
            <button type="button" onclick="window.location=`{{url('automovel')}}`">Cancelar</button>
        </form>
    </div>
</body>

</html>