@extends('layout')

@section('title','Contacto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('messages.store') }}">
				 @csrf
				 <h1 class="display-4">@lang('Contact')</h1>
				 <hr>
				 <div class="form-group">
				 	<label for="name">Nombre:</label>
				 	<input class="form-control bg-light shadow-sm {{ $errors->has('name') ? ' is-invalid' : 'border-0' }}"
				 		id="name"
				 		name="name"
				 		placeholder="Nombre..." value="{{ old('name') }}" >
				 	@if ($errors->has('name'))
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $errors->first('name') }}</strong>
		                </span>
		            @endif
				 </div>
				<div class="form-group">
					<label for="email">E-mail:</label>
					<input class="form-control bg-light shadow-sm {{ $errors->has('email') ? ' is-invalid' : 'border-0' }}" id="email"
						type="email"
						name="email"
						placeholder="Email..." value="{{ old('email') }}" >
					@if ($errors->has('email'))
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $errors->first('email') }}</strong>
		                </span>
		            @endif
				</div>
				<div class="form-group">
					<label for="subject">Asunto:</label>
					<input class="form-control bg-light shadow-sm {{ $errors->has('subject') ? ' is-invalid' : 'border-0' }}" id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}" >
					@if ($errors->has('subject'))
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $errors->first('subject') }}</strong>
		                </span>
		            @endif
				</div>
				<div class="form-group">
					<label for="content">Contenido:</label>
					<textarea class="form-control bg-light shadow-sm {{ $errors->has('content') ? ' is-invalid' : 'border-0' }}" name="content" placeholder="Mensaje..." >{{ old('content') }}</textarea>
					@if ($errors->has('content'))
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $errors->first('content') }}</strong>
		                </span>
		            @endif
				</div>
				<button class="btn btn-primary btn-lg btn-block">Enviar</button>
			</form>
		</div>
	</div>
</div>
@endsection