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
            <legend class>Adicionar Automoveis</legend>
            <form action="/automovel" method="POST">
                <div class="input-container">
                    <label class="label-up">Marca:<input id="marca" type="text" name="marca" /></label>
                    <label class="label-up">Modelo:<input id="modelo" type="text" name="modelo" /></label>
                    <label class="label-up">Cor:<input id="cor" type="text" name="cor" /></label>
                </div>
                <div class="input-container">
                    <label class="label-up">Placa:<input id="placa" type="text" name="placa" /></label>
                    <label class="label-up">Ano de Fabricação:<input id="fabricacao" type="number" name="fabricacao" /></label>
                </div>

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