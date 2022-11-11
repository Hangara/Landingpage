

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
	<a href="\landingpage.blade.php">Regresar</a>
	<a href="contactoIndex.blade">Lista</a>
</head>
<body>
	<h1>Contacto</h1>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<form action ="/recibe-form-contacto" method ="POST">
		@csrf
		<label for ="nombre">Nombre: </label><br>
		<input type="text" name="nombre" id="nombre" value="{{$nombre}}">
		@error('nombre')
		<i>{{$message}}</i>
		@enderror
		<br>
		<label for ="correo">Correo: </label><br>
		<input type="mail" name="correo" id="correo" value="{{$correo}}">
		@error('correo')
		<i>{{$message}}</i>
		@enderror
		<br>
		<label for ="mensaje">Mensaje: </label><br>
		<textarea name="mensaje" id="mensaje" cols="50" rows="10">
		</textarea>
		@error('mensaje')
		<i>{{$message}}</i>
		@enderror

	<br>
	<input type="submit" value="Enviar">
	</form>
	
</body>
</html>	
	
	
	
	
	
	
	
	

	
	