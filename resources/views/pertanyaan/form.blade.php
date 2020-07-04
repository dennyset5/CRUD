@extends('adminlte.welcome')

@section('content')
<div class="container">
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" id="judul">
        </div>
        <div class="form-group">
            <label for="isi">isi</label>
            <input type="text" class="form-control" name="isi" placeholder="Masukkan Isi Pertanyaan" id="isi">
        </div>
        <button class="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection