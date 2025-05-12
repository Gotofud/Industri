@include('layouts.main.header')

<body>
    <div class="container mt-5">
        @include('layouts.main.navbar')

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Judul Berita -->
                <h1 class="post-title">{{ $berita->judul }}</h1>

                <!-- Informasi Meta -->
                <p class="meta-info">
                    By <strong>Admin</strong> | {{ $berita->kategori->nama_kategori }} | {{ $berita->tanggal }}
                </p>

                <!-- Konten Berita -->
                <div class="post-content">
                    <img src="{{ asset('covers/berita/' . $berita->cover) }}" alt="Gambar Berita" class="img-fluid mb-4" width="800" height="400">
                    <p>{{ $berita->isi }}</p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.main.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</html>
