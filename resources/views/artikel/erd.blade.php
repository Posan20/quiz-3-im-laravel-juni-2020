@extends('layouts.master')

@section('content')
<div class="content-wrapper ">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">ERD</h3>
          </div>    
        <div class="card-body">
            <img src="img/ERDQuiz.png" alt="Photo ERD">
            <div class= "ml-3 mt-3" align="right">
                <a class="btn btn-primary"  href="/artikel/" role="button" >Tabel Artikel</a>
                </div>
        </div>
    </div>
</div>
@endsection

@push('jsDT')
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
</script>
@endpush

@push('cssDT')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endpush