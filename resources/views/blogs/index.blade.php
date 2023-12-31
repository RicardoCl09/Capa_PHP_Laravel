@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blogs</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-blog')
                        <a class="btn btn-warning" href="{{ route('blogs.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead>                                     
                                    <th style="display: none;">ID</th>
                                    <th>Titulo</th>
                                    <th>Contenido</th>  
                                    <th>Link Video</th>
                                    <th>Link PDF</th>
                                    <th>Encuesta</th>                              
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td style="display: none;">{{ $blog->id }}</td>                                
                                <td>{{ $blog->titulo }}</td>
                                <td>{{ $blog->contenido }}</td>
                                <td>{{ $blog->linkVideo }}</td>
                                <td>{{ $blog->linkPdf }}</td>
                                <td>{{ $blog->encuesta  }}</td>
                                <td>
                                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">                                        
                                        @can('editar-blog')
                                        <a class="btn btn-info" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-blog')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $blogs->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection