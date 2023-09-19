@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Admin Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card order-card" style="background-color: #FF7439;">
                                        <div class="card-block">
                                            <h5>Usuarios</h5>
                                            @php
                                            use App\Models\User;
                                            $cant_usuarios = User::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card order-card" style="background-color: #471D7C;">
                                        <div class="card-block">
                                            <h5>Roles</h5>
                                            @php
                                            use Spatie\Permission\Models\Role;
                                            $cant_Roles = Role::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_Roles}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card order-card" style="background-color: #FF7439;">
                                        <div class="card-block">
                                            <h5>Capacitaciones</h5>
                                            @php
                                            use App\Models\Blog;
                                            $cant_Blogs = Blog::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-clipboard f-left"></i><span>{{$cant_Blogs}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/blogs" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

