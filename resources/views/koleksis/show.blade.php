@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','koleksis']) }}"> Koleksis</a></li>
                    <li class="breadcrumb-item">@lang('Koleksi') #{{$koleksi->id}}</li>
                </ol>

                <a href="{{ route('koleksis.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
    <tbody>
    <tr>
        <th scope="row">ID:</th>
        <td>{{$koleksi->id}}</td>
    </tr>
            <tr>
            <th scope="row">Kd Koleksi:</th>
            <td>{{ $koleksi->kd_koleksi ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Judul:</th>
            <td>{{ $koleksi->judul ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Jns Bhn Pustaka:</th>
            <td>{{ $koleksi->jns_bhn_pustaka ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Jns Koleksi:</th>
            <td>{{ $koleksi->jns_koleksi ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Jns Media:</th>
            <td>{{ $koleksi->jns_media ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Pengarang:</th>
            <td>{{ $koleksi->pengarang ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Penerbit:</th>
            <td>{{ $koleksi->penerbit ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Tahun:</th>
            <td>{{ $koleksi->tahun ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Cetakan:</th>
            <td>{{ $koleksi->cetakan ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Edisi:</th>
            <td>{{ $koleksi->edisi ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Status:</th>
            <td>{{ $koleksi->status ?: "(blank)" }}</td>
        </tr>
                <tr>
            <th scope="row">Created at</th>
            <td>{{Carbon\Carbon::parse($koleksi->created_at)->format('d/m/Y H:i:s')}}</td>
        </tr>
        <tr>
            <th scope="row">Updated at</th>
            <td>{{Carbon\Carbon::parse($koleksi->updated_at)->format('d/m/Y H:i:s')}}</td>
        </tr>
        </tbody>
</table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('koleksis.edit', compact('koleksi')) }}" class="btn btn-info text-nowrap me-1"><i class="fa fa-edit"></i> @lang('Edit')</a>
                <form action="{{ route('koleksis.destroy', compact('koleksi')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i> @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
