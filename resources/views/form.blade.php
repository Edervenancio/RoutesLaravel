<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário:: Teste de rotas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
<div class="container my-5">
    <form action="{{ url('/users/1') }}" method="POST" autocomplete="off">
     <!-- <input type="hidden" name="_method" value="PUT"> -->
     @method('DELETE')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="first_name">Primeiro Nome</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="Eder">
        </div>

        <div class="form-group">
            <label for="last_name"> Segundo Nome</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="Venancio">
        </div>


        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="local@local">
        </div>



    <button class="btn btn-primary">Enviar!</button>









    </form>
</div>


</body>
</html>