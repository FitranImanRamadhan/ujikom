@extends('layout')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-10">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-header">{{ __('Master Pengguna') }}</div>

                    <div class="card-body">
                        <a href="{{ route('koleksis.create') }}" class="btn btn-sm btn-secondary">
                            Tambah Koleksi
                        </a>
                        <div class="table-responsive">
                        <table id="sample_data" class="table table-striped table-hover table-bordered">
                            <thead role="rowgroup">
                                <tr role="row">
                                    <th role='columnheader'>Kd Koleksi</th>
                                    <th role='columnheader'>Judul</th>
                                    <th role='columnheader'>Jns Bhn Pustaka</th>
                                    <th role='columnheader'>Jns Koleksi</th>
                                    <th role='columnheader'>Jns Media</th>
                                    <th role='columnheader'>Pengarang</th>
                                    <th role='columnheader'>Penerbit</th>
                                    <th role='columnheader'>Tahun</th>
                                    <th role='columnheader'>Cetakan</th>
                                    <th role='columnheader'>Edisi</th>
                                    <th role='columnheader'>Status</th>
                                    <th scope="col" data-label="Actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($koleksis as $koleksi)
                                    <tr>
                                        <td data-label="Kd Koleksi">{{ $koleksi->kd_koleksi ?: '(blank)' }}</td>
                                        <td data-label="Judul">{{ $koleksi->judul ?: '(blank)' }}</td>
                                        <td data-label="Jns Bhn Pustaka">{{ $koleksi->jns_bhn_pustaka ?: '(blank)' }}</td>
                                        <td data-label="Jns Koleksi">{{ $koleksi->jns_koleksi ?: '(blank)' }}</td>
                                        <td data-label="Jns Media">{{ $koleksi->jns_media ?: '(blank)' }}</td>
                                        <td data-label="Pengarang">{{ $koleksi->pengarang ?: '(blank)' }}</td>
                                        <td data-label="Penerbit">{{ $koleksi->penerbit ?: '(blank)' }}</td>
                                        <td data-label="Tahun">{{ $koleksi->tahun ?: '(blank)' }}</td>
                                        <td data-label="Cetakan">{{ $koleksi->cetakan ?: '(blank)' }}</td>
                                        <td data-label="Edisi">{{ $koleksi->edisi ?: '(blank)' }}</td>
                                        <td data-label="Status">{{ $koleksi->status ?: '(blank)' }}</td>

                                        <td data-label="Actions:" class="text-nowrap">
                                            <a href="{{ route('koleksis.show', compact('koleksi')) }}" type="button"
                                                class="btn btn-primary btn-sm me-1">@lang('Show')</a>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-light dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-cog"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('koleksis.edit', compact('koleksi')) }}">@lang('Edit')</a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('koleksis.destroy', compact('koleksi')) }}"
                                                            method="POST" style="display: inline;" class="m-0 p-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="dropdown-item">@lang('Delete')</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


<script>
    $(document).ready(function() {
        $('#sample_data').DataTable();
    });
</script>
@endsection
