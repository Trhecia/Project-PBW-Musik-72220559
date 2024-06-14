@extends('layouts.main')
@section('title','Form Add Musik')
@section('artikel')
<div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Artist</label>
                    <input type="text" name="artist" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Genre</label>
                    <select name="genre" class="form-control">
                        <option value="0" >---- Pilih Genre ----</option>
                        <option value="R&B">R & B</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                        <option value="Klasik">Klasik</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Dangdut">Dangdut</option>
                        <option value="Reggae">Reggae</option>
                        <option value="Metal">Metal</option>    
                        <option value="Blues">Blues</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Album</label>
                    <input type="text" name="album" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <input type="time" name="duration" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2024" name="year" class="form-control" required>
                </div>
                <div class="form-group">
                    <labe>Listener</label>
                    <input type="text" name="listener" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>   
        </div>
    </div>
@endsection
