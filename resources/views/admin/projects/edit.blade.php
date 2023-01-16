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
<form action="{{route('admin.project.update', $project->slug)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" value="{{old('title', $project->title)}}" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    @error('title')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" value="{{old('slug', $project->slug)}}" name="slug" id="slug" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Descrizione</label>
        <input type="text" value="{{old('body', $project->body)}}" name="body" id="body" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div>

    <button type="submit" class="btn btn-primary">Modifica</button>
</form>
@endsection