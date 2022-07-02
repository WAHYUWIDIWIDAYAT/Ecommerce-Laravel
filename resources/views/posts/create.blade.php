@extends('layouts.admin')

@section('title')
    <title>Tambah Artikel</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Artikel</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">

              <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Artikel</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Judul Artikel
                                    <input type="text" name="title" class="form-control" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">Konten</label>
                                    <textarea name="content" placeholder="Content" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
