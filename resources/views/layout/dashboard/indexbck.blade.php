@extends('layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
    <div class="grey-bg container-fluid">
    <section id="minimal-statistics">
        <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">DAFTAR DATA RUMAH IBADAH</h4>
           
        </div>
        </div>
       
    
        <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>MASJID</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/mosque.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>MUSHOLA</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/mushola.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>GEREJA KERISTEN</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/gerejakristen.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>GEREJA KATOLIK</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/gerejakatolik.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>PURE HINDU</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/lempuyang-temple.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>PURE BUDHA</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/buddha.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">278</h3>
                    <span>KELENTENG KONGHUCHU</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/pagoda.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
     
        </div>
    
       
    </section>
    
      
    </div>
    </div>

    
</div>
@endsection