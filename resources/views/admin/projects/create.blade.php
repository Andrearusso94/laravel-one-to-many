@extends('layouts.admin')
@section('content')

<h1>Crea Nuovo Prodotto</h1>
<!--@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif-->
<form action="{{route('admin.project.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" value="{{old('title')}}" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    @error('title')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" value="{{old('slug')}}" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="mb-3">
        <label for="cover_image" class="form-label">Cover Image</label>
        <input type="file" name="cover_image" id="cover_image" class="form-control" placeholder="" aria-describedby="coverimagehelper">
        <small id="coverimagehelper" class="text-muted">Help text</small>
    </div>
    @error('cover_image')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
    <div class="mb-3">
        <label for="body" class="form-label">Descrizione</label>
        <input type="text" value="{{old('body')}}" name="body" id="body" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>

    <button type="submit" class="btn btn-primary">Crea</button>
</form>
@endsection