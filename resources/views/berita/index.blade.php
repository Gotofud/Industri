@include('layouts.admin.head')
@include('layouts.admin.navbar')


<div class="container mt-5">

    <div class="row justify-content-center">
        @include('layouts.admin.sidebar')
        <div class="col-md-8">
            <div class="card bg-dark text-white" style="height: 16.5rem">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="wrapper d-flex mt-3">
                         <div class="card mx-5" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Berita</h5>
                            <h1>sa</h1>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Kategori</h5>
                            <h1>sa</h1>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.admin.script')