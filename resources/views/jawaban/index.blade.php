@extends('adminlte.welcome')

@section('content')

<div class="container">
    <center>
    <table width="400">
        <tr>
            <td><label for="isi">id</label></td>
            <td><label>{{$pertanyaan->id}}</label></td>
        </tr>
        <tr>
            <td><label for="isi">Judul</label></td>
            <td><label>{{$pertanyaan->judul}}</label></td>
        </tr>
        <tr>
            <td><label for="isi">isi</label></td>
            <td><label>{{$pertanyaan->isi}}</label></td>
        </tr>
        <tr>
            <td><label for="isi">Dibuat Pada</label></td>
            <td><label>{{$pertanyaan->created_at}}</label></td>
        </tr>
        <tr>
            <td><label for="isi">Diubah Pada</label></td>
            <td><label>{{$pertanyaan->updated_at}}</label></td>
        </tr>
    </table>
</center>
    <form action="/jawaban" method="POST" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="isi">Jawaban</label>
            <input type="text" class="form-control" name="isi" placeholder="Masukkan Jawaban" id="isi" required>
        </div>
        <div class="form-group">
        <input type="hidden" class="form-control" name="id_pertanyaan" value="{{$pertanyaan->id}}" id="id">
        </div>
        <button class="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection