@extends('layout')

@section('title','Contacto')

@section('content')
	<h1>Contact</h1>
	{{--  @if($errors->any())
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	@endif   --}}
	<form  method="POST" action="{{ route('contact') }}">
		 @csrf
		<input name="name" placeholder="Nombre..." value="{{ old('name') }}" >
		{!! $errors->first('name','<small>:message</small>') !!}
		<input type="email" name="email" placeholder="Email..." value="{{ old('email') }}" >
		{!! $errors->first('email','<small>:message</small>') !!}

		<input name="subject" placeholder="Asunto..." value="{{ old('subject') }}" >
		{!! $errors->first('subject','<small>:message</small>') !!}
		<textarea name="content" placeholder="Mensaje..." value="{{ old('content') }}"></textarea>
		{!! $errors->first('content','<small>:message</small>') !!}
		<button>Enviar</button>
	</form>
@endsection