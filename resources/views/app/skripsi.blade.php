@extends('layouts.usr')


@section('css-after')
<style>
  /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

/* Timeline holder */
ul.timeline {
    list-style-type: none;
    position: relative;
    padding-left: 1.5rem;
}

 /* Timeline vertical line */
ul.timeline:before {
    content: ' ';
    background: #fff;
    display: inline-block;
    position: absolute;
    left: 16px;
    width: 4px;
    height: 100%;
    z-index: 400;
    border-radius: 1rem;
}

li.timeline-item {
    margin: 20px 0;
}

/* Timeline item arrow */
.timeline-arrow {
    border-top: 0.5rem solid transparent;
    border-right: 0.5rem solid #fff;
    border-bottom: 0.5rem solid transparent;
    display: block;
    position: absolute;
    left: 2rem;
}

/* Timeline item circle marker */
li.timeline-item::before {
    content: ' ';
    background: #ddd;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #fff;
    left: 11px;
    width: 14px;
    height: 14px;
    z-index: 400;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}


/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/


.text-gray {
    color: #999;
}
.timeline-item .action{
  /* display: none */
}
.timeline-item:hover .action{
  display: block
}
</style>
@endsection

@section('content')

    <!-- Page Content Holder -->
    <div id="content">
      <div class="container-fluid">
        <div class="container py-5">

            <!-- For demo purpose -->
            <div class="row text-center text-white mb-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="text-white">Management Skripsi</h1>
                    <p class="lead mb-0"> " Judul Skripsi Saya Paling Terbaik" </p>
                    </div>
                </div><!-- End -->
        
        
                <div class="row">
                    <div class="col-md-12 col-lg-7 mx-auto">
                        <!-- Timeline -->
                        <ul class="timeline">
                          @php
                              $data = [
                                ['BAB 4','dikerjakan'],
                                ['BAB 3','direvisi'],
                                ['BAB 2','revisi'],
                                ['BAB 1','seleasi']
                              ];
                          @endphp
                          @foreach ($data as $item)
                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow 
                            
                            @if($item[1] == 'dikerjakan')
                            bg-gradient-primary
                            @elseif($item[1] == 'revisi')
                            bg-gradient-danger
                            @elseif('selesai')
                            bg-gradient-success
                            @elseif('direvisi')
                            bg-gradient-warning
                            @endif
                            
                            text-white">
                                <div class="timeline-arrow"></div>
                                <b class="mb-0"> {{ $item[0] }} </b><br>
                                <span class="small"><i class="fa fa-clock-o mr-1"></i>21 March, 2019</span>
                                <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>


                                <a target="_BLANK" href="https://docs.google.com/document/d/1a41KQzSsbjvDoZS1s7OxZ95d4MOVraqT/edit" class="btn btn-white btn-sm">
                                  <i class="ni ni-single-copy-04"></i>
                                  Lihat</a>
                            
                              </li>
                          @endforeach
                        </ul><!-- End -->
        
                    </div>
                </div>
            </div>

      </div>
    </div>

@endsection

@section('js-after')
 
@endsection