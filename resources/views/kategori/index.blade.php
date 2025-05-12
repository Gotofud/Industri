@include('layouts.admin.head')
@include('layouts.admin.navbar')

<div class="container mt-5">
    <div class="row justify-content-center">
        @include('layouts.admin.sidebar')
        <div class="col-md-9">
            <div class="card bg-dark text-white" style="width: 100%;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('Dashboard Admin') }}</h5>
                    <a href="{{ route('kategori.create') }}" class="btn btn-success btn-sm">Tambah Kategori</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered table-hover text-white align-middle">
                            <thead class="table-light text-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kategori as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td>
                                            <form action="{{ route('kategori.destroy', $data->id) }}" method="POST" class="d-inline">
                                                <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
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
