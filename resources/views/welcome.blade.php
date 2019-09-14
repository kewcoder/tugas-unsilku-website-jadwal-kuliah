@extends('layouts.app')

@section('content')
<div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped pb-250">
          <div class="shape shape-style-1 shape-default"
           
        style="
        background: url('/img/bg.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        ">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="container py-lg-md d-flex">
            <div class="col px-0">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="display-3  text-white">Mencegah Lebih BAIK<span>dari pada memperbaiki</span></h1>
                  <p class="lead  text-white">
                    Kertas kertas tidak terpakai dari proses pembuatan skripsi dan laporan akhirnya menumpuk dan menjadi sampah. Penggunaan kertas disini sebenarnya bisa diminimalisir dengan adanya digitalisasi pada proses pembuatan skripsi dan laporan.
                  </p>
                  <div class="btn-wrapper">
                    <a href="/skripsi" class="btn btn-success btn-icon mb-3 mb-sm-0">
                      <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                      <span class="btn-inner--text">Skripsi</span>
                    </a>
                    <a href="/praktikum" class="btn btn-white btn-icon mb-3 mb-sm-0">
                      <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                      <span class="btn-inner--text">Praktikum</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- SVG separator -->
          <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
          </div>
        </section>
        <!-- 1st Hero Variation -->
      </div>
  <section class="section section-lg pt-lg-0 mt--200">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="row row-grid">
                <div class="col-lg-4">
                  <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5">
                      <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                        <i class="ni ni-check-bold"></i>
                      </div>
                      <h6 class="text-primary text-uppercase">Masalah</h6>
                      <p class="description mt-3">
                          1.Bagaimana cara mempermudah proses bimbingan mahasiswa tingkat akhir dengan wali dosen?
                          <br> <br> 2. Bagaimana cara mengurangi sampah kertas pada proses pembuatan skripsi dan laporan akhir praktikum?
                      </p>
                      <div>
                        <span class="badge badge-pill badge-success">Sampah</span>
                        <span class="badge badge-pill badge-success">Kurang Efisien</span>
                        <span class="badge badge-pill badge-success">Susah</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5">
                      <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                        <i class="ni ni-istanbul"></i>
                      </div>
                      <h6 class="text-success text-uppercase">Tujuan</h6>
                      <p class="description mt-3">
                          1. Mempermudah proses bimbingan skripsi pada mahasiswa tingkat akhir.
                          <br> <br> 2. Mengurangi sampah kertas dari proses pembuatan skripsi dan laporan akhir praktikum.
                       
                      </p>
                      <div>
                        <span class="badge badge-pill badge-success">Sampah Berkurang</span>
                        <span class="badge badge-pill badge-success">Lebih Efisien</span>
                        <span class="badge badge-pill badge-success">Jadi Mudah</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5">
                      <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                        <i class="ni ni-planet"></i>
                      </div>
                      <h6 class="text-warning text-uppercase">Manfaat</h6>
                      <p class="description mt-3">

                          1. Proses bimbingan tidak memerlukan tatap muka antar mahasiswa dengan pembimbing.
                          <br> <br> 2. Proses pembuatan skripsi dan laporan tidak menyisakan sampah kertas.
                      </p>
                      <div>
                        <span class="badge badge-pill badge-warning">Sumber Sampah tidak ada</span>
                        <span class="badge badge-pill badge-warning">Efisien</span>
                        <span class="badge badge-pill badge-warning">Mudah</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  @endsection

