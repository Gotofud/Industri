@include('layouts.admin.head')
@include('layouts.admin.navbar')


<div class="container mt-5">

    <div class="row justify-content-center">
        @include('layouts.admin.sidebar')
        <div class="col-md-8">
            <div class="card bg-dark text-white" style="height: auto; width: 55rem;">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container mt-3">
                        <table class="table">
                            <a href="{{ route('kategori.create') }}" class="btn btn-success">Tambah kategori</a>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kategori as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td>
                                            <form action="{{route('kategori.destroy', $data->id)}}" method="POST">
                                                <a href="{{route('kategori.edit', $data->id)}}"
                                                    class="btn btn-sm btn-success">Edit</a>
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