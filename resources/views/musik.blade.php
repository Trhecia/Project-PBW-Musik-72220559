@extends('layouts.main')
@section('title','musik')
@section('artikel')
<div class="card">
    <div class="class-header ml-2 mr-2 mt-2">
        <a href="/musik/form-add" class="btn btn-primary"><i class="bi bi-plus-square"> Musik</i></a>
    </div>

<div class="class-body ml-2 mr-2">
    @if (session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('alert')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
</div>
    @endif
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th">No</th>
                <th>Title</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Album</th>
                <th>Duration</th>
                <th>Year</th>
                <th>Listener</th>
                <th>Poster</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ms as $idx => $m)
            <tr>
            <td width="1%">{{ $idx + 1 }}</td>
                <td>{{ $m -> title }}</td>
                <td>{{ $m -> artist }}</td>
                <td>{{ $m -> genre }}</td>
                <td>{{ $m -> album }}</td>
                <td>{{ $m -> duration }}</td>
                <td>{{ $m -> year }}</td>
                <td>{{ $m -> listener }}</td>
                <td>
                    <img src="{{asset('/storage/'.$m->poster)}}" alt="{{ $m->poster }}"
                     height="80" width="80">
                </td>
                <td>
                    <a href="/musik/edit-form/{{ $m->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                    <a href="/delete/{{ $m->id }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection