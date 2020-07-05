@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="card">    
        <div class="card-body">
        <div class="ml-3 mt-3">
            <h3>Judul  : {{$artikel->judul}}</h3>
            <p>Slug : {{$artikel->judul}}</p>
            <p>{{$artikel->isi}}</p>
            <a class="btn btn-success"  href="#" role="button" >{{$artikel -> tag}}</a>
        </div>
        </div>
    </div>
</div> 
@endsection