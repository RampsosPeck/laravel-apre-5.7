@extends('layout')

@section('title','About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.svg" alt="Quién soy">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4" >Quién soy</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur voluptatem laudantium mollitia corporis commodi omnis doloremque id accusamus, voluptate eius fugit sint et nesciunt dignissimos natus. Natus, ut, dolore.
            </p>
            <a class="btn btn-lg btn-block btn-primary"
                href="{{ route('contact') }}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary"
                href="{{ route('projects.index') }}">Portafolio</a>
        </div>
    </div>
</div>
@endsection