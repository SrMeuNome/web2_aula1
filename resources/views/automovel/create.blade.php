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
        <form action="/automovel" method="POST">
            <label>Marca:<input type="text" name="marca" /></label>
            <label>Modelo:<input type="text" name="modelo" /></label>
            <label>Cor:<input type="text" name="cor" /></label>
            <label>Placa:<input type="text" name="placa" /></label>
            <label>Ano de Fabricação:<input type="number" name="fabricacao" /></label>
            @csrf
            <button type="submit">Salvar</button>
            <button type="button" onclick="window.location='{{url('automovel')}}'">Cancelar</button>
        </form>
    </div>
</body>

</html>