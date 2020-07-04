@extends('adminlte.welcome')

@section('content')
<h1 class="text-center mt-5 mb-3">Pertanyaan</h1>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Dibuat Pada</th>
        <th scope="col">Diubah Pada</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pertanyaan as $key => $p)
        <tr>
        <td scope="col">{{$key+1}}</td>
        <td scope="col">{{$p->judul}}</td>        
        <td scope="col">{{$p->isi}}</td>        
        <td scope="col">{{$p->created_at}}</td>        
        <td scope="col">{{$p->updated_at}}</td>        
        <td scope="col"><a href="/jawaban/{{$p->id}}" class="btn btn-success">Jawab</a></td>        
        </tr>
        @endforeach
    </tbody>
  </table>
  
  @endsection