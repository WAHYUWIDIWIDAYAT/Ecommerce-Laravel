@extends('layouts.admin')

@section('title')
    <title>Edit Artikel</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <form action="{{ route('posts.update',$post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Artikel</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Judul Artikel
                                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="content">Konten</label>
                                    <textarea class="form-control" style="height:150px" name="content" placeholder="Content">{{ $post->content }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
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
