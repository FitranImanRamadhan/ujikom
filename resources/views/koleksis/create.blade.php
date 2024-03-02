@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','koleksis']) }}"> Koleksis</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('koleksis.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
        <label for="kd_koleksi" class="form-label">Kd Koleksi:</label>
        <input type="text" name="kd_koleksi" id="kd_koleksi" class="form-control" value="{{@old('kd_koleksi')}}" required/>
        @if($errors->has('kd_koleksi'))
			<div class='error small text-danger'>{{$errors->first('kd_koleksi')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul:</label>
        <input type="text" name="judul" id="judul" class="form-control" value="{{@old('judul')}}" required/>
        @if($errors->has('judul'))
			<div class='error small text-danger'>{{$errors->first('judul')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="jns_bhn_pustaka" class="form-label">Jns Bhn Pustaka:</label>
        <input type="text" name="jns_bhn_pustaka" id="jns_bhn_pustaka" class="form-control" value="{{@old('jns_bhn_pustaka')}}" required/>
        @if($errors->has('jns_bhn_pustaka'))
			<div class='error small text-danger'>{{$errors->first('jns_bhn_pustaka')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="jns_koleksi" class="form-label">Jns Koleksi:</label>
        <input type="text" name="jns_koleksi" id="jns_koleksi" class="form-control" value="{{@old('jns_koleksi')}}" required/>
        @if($errors->has('jns_koleksi'))
			<div class='error small text-danger'>{{$errors->first('jns_koleksi')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="jns_media" class="form-label">Jns Media:</label>
        <input type="text" name="jns_media" id="jns_media" class="form-control" value="{{@old('jns_media')}}" required/>
        @if($errors->has('jns_media'))
			<div class='error small text-danger'>{{$errors->first('jns_media')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="pengarang" class="form-label">Pengarang:</label>
        <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{@old('pengarang')}}" required/>
        @if($errors->has('pengarang'))
			<div class='error small text-danger'>{{$errors->first('pengarang')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{@old('penerbit')}}" required/>
        @if($errors->has('penerbit'))
			<div class='error small text-danger'>{{$errors->first('penerbit')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="tahun" class="form-label">Tahun:</label>
        <input type="text" name="tahun" id="tahun" class="form-control" value="{{@old('tahun')}}" required/>
        @if($errors->has('tahun'))
			<div class='error small text-danger'>{{$errors->first('tahun')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="cetakan" class="form-label">Cetakan:</label>
        <input type="text" name="cetakan" id="cetakan" class="form-control" value="{{@old('cetakan')}}" required/>
        @if($errors->has('cetakan'))
			<div class='error small text-danger'>{{$errors->first('cetakan')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="edisi" class="form-label">Edisi:</label>
        <input type="text" name="edisi" id="edisi" class="form-control" value="{{@old('edisi')}}" required/>
        @if($errors->has('edisi'))
			<div class='error small text-danger'>{{$errors->first('edisi')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status:</label>
        <select name="status" id="status" class="form-control form-select" required>
    <option value="">Select Status</option>
    @foreach(["active" => "Active", "inactive" => "Inactive"] as $value => $label )
        <option value="{{ $value }}" {{ @old('status') == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('status'))
			<div class='error small text-danger'>{{$errors->first('status')}}</div>
		@endif
    </div>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('koleksis.index', []) }}" class="btn btn-light">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Koleksi')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
