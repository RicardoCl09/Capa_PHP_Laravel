@extends('layoutLector.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page_heading">Capacitaciones disponibles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3">
                    @foreach ($blogs as $blog)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$blog->titulo}}</h5>
                                <p class="card-text">{{$blog->contenido}}</p>
                                <a href="{{route('LectorBlogs.show',$blog->id)}}" class="btn btn-primary" style="background-color: #FF7439;" >Iniciar capacitacion</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection