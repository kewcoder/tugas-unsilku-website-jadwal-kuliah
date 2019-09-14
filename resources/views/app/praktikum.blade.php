@extends('layouts.usr')


@section('css-after')

@endsection

@section('content')

    <!-- Page Content Holder -->
    <div id="content">
      <div class="container pt-4">
        <h1 class="text-center text-white pt-4">Management Praktikum</h1>
        <h6 class="col-md-12 text-white">
            PraktikumKu
          </h6>
        <div class="row mb-4">
          @php
              $data = [
                'Pemrograman Berorientasi Object',
                'Rekayasa Perangkat Lunak',
                'Jaringan Komputer',
              ];
          @endphp
          @foreach ($data as $item)
              
            <a href="/p/detail" class="col-lg-4 mt-4">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                              <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">
                                    {{ $item }}
                                  </h5>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                    <i class="ni ni-chart-pie-35"></i>
                                </div>
                              </div>
                        </div>
                        <p class="text-sm mt-2 mb-0">
                            <span class="text-default mr-2 "><i class="ni ni-active-40"></i> Lihat Laporan </span>
                        </p>
                      </div>
                  </div>
               </a>

               @endforeach
        </div>
      </div>
    </div>

@endsection

@section('js-after')
 
@endsection