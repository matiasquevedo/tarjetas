<html>
	<head>
		
	</head>

	<body>
		asdasd

		{!! Form::open(['route'=>'codes.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Codigo') !!}
			{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Crear',['class'=>'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}
	</body>
</html>