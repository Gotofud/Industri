<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <p class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Admin Berita</span>
            </p>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link text-white">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('berita.index')}}" class="nav-link text-white">
                        Berita
                    </a>
                </li>
                <li>
                    <a href="{{ route('kategori.index') }}" class="nav-link text-white">
                        Kategori
                    </a>

            </ul>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li></li>
            </ul>
        </div>