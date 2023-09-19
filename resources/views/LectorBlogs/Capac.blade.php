@extends('layoutLector.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">{{$blog->titulo}}</h3>
        </div>
        <div class="section-body">
            <div class="row justify-content-center">
               <iframe src="{{ $blog->linkVideo }}" allow="autoplay" width="1280" height="720"></iframe>
            </div>
            <br>
            <div>
                <embed src="{{ $blog->linkPdf }}" width="100%" height="720">
            </div>
            <br>
            <div class="row">
                <a class="btn btn-primary" href="{{$blog->encuesta}}">Realizar Cuestionario</a>
            </div>
        </div>
    </section>
@endsection