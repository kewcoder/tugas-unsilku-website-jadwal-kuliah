
@extends('layouts.usr')

@section('content')
<div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 pt-5 mt-5">
                    <div class="card">
                        <div class="card-body pt-0">
                                
                                <div class="text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-9">
                                                <a href="#!" class="avatar rounded-circle" style="width:150px">
                                                        <img  alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg">
                                                </a>
                                                <p class="pt-2">
                                                <b> {{ Auth::user()->name }}</b>
                                                <br>
                                                    {{ Auth::user()->email }}
                                                <br>
                                                <small>{{ Auth::user()->id_kampus }}</small>
                                                </p>
                                                <a href="#" >Edit Profile</a>
                                                </div>
                                    </div>
                                </div>
    
                            <div class="row px-4">
                                <a href="/skripsi" class="col-md-6 mt-5 media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                    <i class="ni ni-spaceship"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                    <h6 class="heading text-primary mb-md-1">Skripsi</h6>
                                    <p class="description mb-0">Aplikasi Management
                                            <br class="d-none d-lg-block">
                                        Skripsi.</p>
                                    </div>
                                </a>
                                <a href="/praktikum" class="col-md-6 mt-5 media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                    <i class="ni ni-palette"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                    <h6 class="heading text-primary mb-md-1">Praktikum</h6>
                                    <p class="description mb-0">Aplikasi Management 
                                            <br class="d-none d-lg-block">
                                        Praktikum.</p>
                                    </div>
                                </a>
                            </div>
    
                            <div class="row">
                                <div class="col-12 pt-5 my-3 text-center">
                                    <nav>
                                            <a class="btn btn-link text-center " href="/">
                                                <i class="fa fa-home"></i>
                                                Home
                                            </a>
    
                                            <a href="#" class="btn btn-link text-center"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                <i class="ni ni-curved-next"></i>
                                                Logout
                                                </a>
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endsection