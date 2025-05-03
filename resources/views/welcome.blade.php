<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <title>Blog Template · Bootstrap v5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col">
                    <h1><i>Beritah</i></h1>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <a class="nav-item nav-link link-body-emphasis" href="#">Dunia</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Politik</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Teknologi</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Desain</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Budaya</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Bisnis</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Pendidikan</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Kesehatan</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Sains</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Gaya</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
            </nav>
        </div>
    </div>

    <main class="container">
        <div id="carouselExampleAutoplaying" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/berita1.jpeg') }}" class="d-block w-100" alt="..." height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/berita2.jpeg') }}" class="d-block w-100" alt="..." height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/berita3.jpeg') }}" class="d-block w-100" alt="..." height="450px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row mb-2">
            @foreach ($artikel as $data)
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong
                                class="d-inline-block mb-2 text-primary-emphasis">{{ $data->kategori->nama_kategori }}</strong>
                            <h3 class="mb-0" style="text-overflow: ellipsis; ">{{$data->judul}} <br></h3>
                            <div class="mb-1 text-body-secondary">{{$data->tanggal}}</div>
                            <p class="card-text mb-auto"
                                style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{ $data->isi }}</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                Continue reading
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 p-5 mb-4 bg-black text-white rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Baca <i>Beritah</i> Hari ini</h1>
                <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat tempore
                    numquam saepe labore nesciunt blanditiis aperiam dolores sit, ea voluptatum ut voluptatibus quia
                    fugit accusantium nulla minima ex ab culpa?</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
        </div>

        <article>
            <div class="album py-5 mt-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($berita as $news)
                            <a href="" class="text-decoration-none">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                                fill="#eceeef" dy=".3em">Thumbnail</text>
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text"
                                                style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; ">
                                                {{$news->judul}}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-body-secondary">{{$news->tanggal}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
        </article>

    </main>

    <footer class="pt-3 mt-4 text-body-secondary border-top text-center mb-2">
        © Baca Berita 2025
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</html>