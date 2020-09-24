<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Automoveis</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="conteiner-center">
        <fieldset>
            <legend class>Editar Automovel</legend>
            <form action="/automovel/{{$automovel->id}}" method="POST">
                <div class="input-container">
                    <label class="label-up">Marca:<input id="marca" type="text" name="marca" value="{{$automovel->marca}}" /></label>
                    <label class="label-up">Modelo:<input id="modelo" type="text" name="modelo" value="{{$automovel->modelo}}" /></label>
                    <label class="label-up">Cor:<input id="cor" type="text" name="cor" value="{{$automovel->cor}}" /></label>
                </div>
                <div class="input-container">
                    <label class="label-up">Placa:<input id="placa" type="text" name="placa" value="{{$automovel->placa}}" /></label>
                    <label class="label-up">Ano de Fabricação:<input id="fabricacao" type="number" name="fabricacao" value="{{$automovel->fabricacao}}" /></label>
                </div>
                <input type="hidden" name="_method" value="PUT" />
                @csrf
                <div class="button-group">
                    <button class="salvar" type="submit">Salvar</button>
                    <button class="cancelar" type="button" onclick="window.location=`{{url('automovel')}}`">Cancelar</button>
                </div>
            </form>
        </fieldset>
    </div>
</body>

</html>