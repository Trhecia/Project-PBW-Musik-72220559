@extends('layouts.main')
@section('title','Form Edit Musik')
@section('artikel')
<div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/update/{{ $ms->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $ms->title }}" required>
                </div>
                <div class="form-group">
                    <label>Artist</label>
                    <input type="text" name="artist" class="form-control" value="{{ $ms->artist }}" required>
                </div>
                <div class="form-group">
                    <label>Genre</label>
                    <select name="genre" class="form-control">
                        <option value="0" >---- Pilih Genre ----</option>
                        <option value="R&B" {{ ($ms->genre == "R&B") ? "Selected":"" }}>R & B</option>
                        <option value="Hip-Hop" {{ ($ms->genre == "Hip-Hop") ? "Selected":"" }}>Hip-Hop</option>
                        <option value="Klasik" {{ ($ms->genre == "Klasik") ? "Selected":"" }}>Klasik</option>
                        <option value="Jazz" {{ ($ms->genre == "Jazz") ? "Selected":"" }}>Jazz</option>
                        <option value="Dangdut" {{ ($ms->genre == "Dangdut") ? "Selected":"" }}>Dangdut</option>
                        <option value="Reggae" {{ ($ms->genre == "Reggae") ? "Selected":"" }}>Reggae</option>
                        <option value="Metal" {{ ($ms->genre == "Metal") ? "Selected":"" }}>Metal</option>    
                        <option value="Blues" {{ ($ms->genre == "Blues") ? "Selected":"" }}>Blues</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Album</label>
                    <input type="text" name="album" class="form-control" value="{{ $ms->album}}" required>
                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <input type="time" name="duration" class="form-control" value="{{ $ms->duration}}" required>
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2024" name="year" class="form-control" value="{{ $ms->duration}}"required>
                </div>
                <div class="form-group">
                    <labe>Listener</label>
                    <input type="text" name="listener" class="form-control" value="{{ $ms->listener}}" required>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file">
                </div>

                <div class="form-group">
                    <img src="{{asset('/storage/'.$ms->poster)}}" alt="{{ $ms->poster }}" height="80" width="80">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>   
        </div>
    </div>
@endsection
