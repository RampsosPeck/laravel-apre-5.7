@extends('layout')

@section('title','Portfolio')

@section('content')
<div class="container">

	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">@lang('Projects')</h1>
		@auth
			<a class="btn btn-primary"
				href="{{ route('projects.create') }}">Crear proyecto
			</a>
		@endauth
	</div>
	<hr>
	<p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, minima, quos itaque velit numquam necessitatibus.
	</p>
	<ul class="list-group">
		@forelse($projects as $project)
			{{-- <li>{{ $portfolioItem }} <small>{{ $loop->first ? 'Es el primero' : '' }}</small> </li>  --}}
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between align-items-center"
				href="{{ route('projects.show',$project) }}">
				 <span class="text-secondary font-weight-bold">
				 		{{ $project->title }}
				 </span>
				 <span class="text-black-50">
				 	{{ $project->created_at->format('d/m/Y') }}
				 </span>
				</a>  <small>{{ $loop->last ? 'Es el último' : '' }}</small>
			</li>
		@empty
			<li class="d-flex justify-content-between align-items-center">No hay proyectos para mostrar</li>
		@endforelse
		{{ $projects->links() }}

	</ul>

</div>
@endsection