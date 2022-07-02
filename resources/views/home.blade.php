@extends('layouts.admin')
@section('title')
    <title>Dashboard</title>
@endsection
@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Halaman Admin</h4>
                        </div>
                        <div class="card-body">
                                <h4>Selamat Datang di Halaman Admin</h4>
                                <p>
                                    Anda bisa melakukan penambahan product , management aplikasi dan dapat memanagement artikel 
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection