@extends('layouts.template')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="container">
                <form action="/articles/{{$article->id}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"><br>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"><br>
                    </div>
                    <div class="form-group">
                        <label for="image">Feature Image</label>
                        <input type="file" class="form-control" required="required" name="image" value="{{$article->featured_image}}"><br>
                        <img width="150px" src="{{asset('storage/'.$article->featured_image)}}">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>

        </div>
    </section>
</div>

@endsection