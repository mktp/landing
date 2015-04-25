@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Este es un servicio nuevo</h1>

				{!! Form::open(array('route' => 'mktp/contact/save/', 'class' => 'form')) !!}
				
				<div class="form-group">
					{!! Form::hidden('id', 0) !!}
					{!! Form::label('Nombre') !!}
					{!! Form::text('name', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el nombre de cliente')) !!}
					{!! Form::label('Email') !!}
					{!! Form::text('email', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su email')) !!}
					{!! Form::label('Repetir email') !!}
					{!! Form::text('repeat', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su email otra vez')) !!}
					{!! Form::label('Ciudad') !!}
					{!! Form::text('city', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su ciudad')) !!}
					{!! Form::label('Compañia') !!}
					{!! Form::text('group', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su compañia y organizacion')) !!}
					{!! Form::label('Asunto') !!}
					{!! Form::text('subject', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el asunto')) !!}
					{!! Form::label('Mensaje') !!}
					{!! Form::text('text', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el mensaje')) !!}
					
				</div>
				
				<div class="form-group">
					{!! Form::submit('Ingresar', 
					  array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

		</div>
    </div>
</div>

@endsection
