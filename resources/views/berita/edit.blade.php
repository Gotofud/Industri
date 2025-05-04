@include('layouts.admin.head')
@include('layouts.admin.navbar')


<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container mt-3">
                        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Judul" name="judul" value="{{ $berita->judul }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="isi"  value="{{ $berita->isi }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Kategori</span>
                                <select class="form-select" aria-label="Default select example" name="id_kategori">
                                    <option selected>Select Category</option>
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                            <img src="{{ asset('covers/berita/' . $berita->cover) }}" alt="" width="40px"
                            height="40px">
                                <label for="exampleFormControlInput1" class="form-label">Cover</label>
                                <input type="file" class="form-control" name="cover">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.admin.script')