@extends('plantilla')

@section('content')
<style>
        .uper{
            margin-top:40px;
        }
        </style>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login with Facebook</div>

                        <div class="card-body">
                             <a class="btn-primary" href="/login/facebook">
                            Facebook Login
                            </a>
                        <div class="card-body">
                            <a class="btn-primary" href="/casilla/create">
                            Crear una casilla
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection