@extends('layouts.master')
@include('sweetalert::alert')
@section('content')
<div class="content-wrapper ">
    <div class="card">    
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul Artikel</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $key => $artikel)
                        <tr id="{{$artikel->id}}">
                        <td> {{ $key + 1}}</td>
                        <td> {{ $artikel -> judul}}</td>
                        <td> {{ $artikel -> isi}}</td>
                        <td> <a class="btn btn-success"  href="#" role="button" >{{$artikel -> tag}}</a></td>
                        <td>
                            <a class="btn btn-primary"  href="/artikel/{{$artikel->id}}" role="button" >Detail</a>
                            <a class="btn btn-primary"  href="/artikel/{{$artikel->id}}/edit" role="button" >Edit</a>
                            <form action="/artikel/{{$artikel->id}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class= "ml-3 mt-3" align="right">
                <a class="btn btn-primary"  href="/artikel/create" role="button" >+ Post Artikel</a>
                </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush
