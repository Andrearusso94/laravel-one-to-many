@extends('layouts.admin')

@section('content')

<h1>{{$project->title}}</h1>
<h5>{{$project->slug}}</h5>
<div class="content">
    {{$project->body}}
</div>

@endsection