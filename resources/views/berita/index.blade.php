@include('layouts.admin.head')
@include('layouts.admin.navbar')

<div class="container mt-5">
    <div class="row justify-content-center">
        @include('layouts.admin.sidebar')
        <div class="col-md-9">
            <div class="card bg-dark text-white" style="width: 100%;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('Dashboard Admin') }}</h5>
                    <a href="{{ route('berita.create') }}" class="btn btn-success btn-sm">Tambah Berita</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered text-white align-middle">
                            <thead class="table-light text-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Kategori</th>
                                    <th>Cover</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($berita as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->Kategori->nama_kategori }}</td>
                                        <td>
                                            <img src="{{ asset('covers/berita/' . $data->cover) }}" alt="cover"
                                                 class="img-thumbnail" width="60" height="60">
                                        </td>
                                        <td>{{ $data->judul }}</td>
                                        <td title="{{ $data->isi }}" style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            {{ $data->isi }}
                                        </td>
                                        <td>
                                            <form action="{{ route('berita.destroy', $data->id) }}" method="POST" class="d-inline">
                                                <a href="{{ route('berita.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('layouts.admin.script')
