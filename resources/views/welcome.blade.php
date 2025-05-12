@include('layouts.main.header')

<body>
    <main class="container mt-4">
        <div class="container py-4">
            @include('layouts.main.navbar')
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Hanya di <i>Beritah.</i>com</h1>
                    <p class="col-md-8 fs-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil rerum corrupti, asperiores obcaecati enim reprehenderit nostrum nulla
                    </p>
                    <button class="btn btn-primary btn-lg" type="button">Baca Sekarang</button>
                </div>
            </div>
        </div>

        <div class="row mb-2 g-1">
            @foreach ($artikel as $data)
                <div class="col">
                    <a href="{{ route('berita.read', $data->id) }}">
                        <div class="card mb-5 mx-auto" style="width: 33.5rem;">
                            <img src="{{ asset('covers/berita/' . $data->cover) }}" class="card-img-top" alt="..." style="height: 20.5rem;">
                            <div class="card-body">
                                <p class="fs-3" style="white-space: nowrap; overflow: hidden;">{{ $data->judul }}</p>
                                <p class="fs-5">{{ $data->kategori->nama_kategori }}</p>
                                <p class="fs-6">{{ $data->tanggal }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <marquee class="bg-primary text-white mt-3" direction="left" style="height: 50px; font-size: 30px;">
            Baca Berita terpercaya dan terlengkap hanya di <i><b>Beritah</b></i>.com
        </marquee>

        <article>
            <div class="album py-5 mt-5">
                <div class="text mb-5">
                    <h1><i>Beritah</i> Terbaru</h1>
                </div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($berita as $news)
                            <a href="{{ route('berita.read', $news->id) }}" class="text-decoration-none">
                                <div class="col">
                                    <div class="card" style="width: 22.5rem;">
                                        <img src="{{ asset('covers/berita/' . $news->cover) }}" class="card-img-top" alt="News" style="height: 15.5rem;" />
                                        <div class="card-img-overlay text-white">
                                            <h4 style="white-space: nowrap; overflow: hidden;">{{ $news->judul }}</h4>
                                            <p class="card-text">{{ $news->kategori->nama_kategori }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
    </main>

    @include('layouts.main.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</html>
