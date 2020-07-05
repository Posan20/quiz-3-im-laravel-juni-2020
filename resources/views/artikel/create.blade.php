@extends('layouts.master')

@section('content')
<div class="content-wrapper ">
<div class="card">
<div class="ml-3">
  <div class="card-header">
    <h3 class="card-title">Post Artikel</h3>
  </div>
    <form action="/artikel" method="POST">
        @csrf
        <div class="card-body">
        <div class="form-group">
            <label for="name">Judul Artikel : </label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul artikel" id="judul">
        </div>
          <div class="form-group">
            <label for="description">Isi Artikel : </label>
            <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan isi artikel">
          </div>
          <div class="form-group">
            <label for="description">Tag Artikel : </label>
            <input type="text" class="form-control" name="tag" id="tag" placeholder="Masukkan tag artikel">
          </div>
        <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
          <button type="submit" class="btn btn-primary">Post</button>
        </div>
      </form>
</div>
</div>
</div>
@endsection