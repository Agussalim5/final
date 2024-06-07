@extends('layout.master')
@section('judul')
Dashboard
@endsection
@section('content')
    <div class="card-content">
        <div class="row row-group m-0">
           <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="/genre" class="text-decoration-none">
                  <div class="card-body">
                      <h5 class="text-white mb-0"><span class="float-right"><i class="zmdi zmdi-format-list-bulleted"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                          <div class="progress-bar" style="width:55%"></div>
                      </div>
                      <p class="mb-0 text-white small-font">Genre<span class="float-right"> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                  </div>
              </a>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="/" class="text-decoration-none">
                <div class="card-body">
                  <h5 class="text-white mb-0">3<span class="float-right"><i class="zmdi zmdi-card-membership"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Film<span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </a>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="/" class="text-decoration-none">
                <div class="card-body">
                  <h5 class="text-white mb-0">1
                    <span class="float-right"><i class="zmdi zmdi-accounts"></i></span>
                  </h5>
                  <div class="progress my-3" style="height: 3px;">
                    <div class="progress-bar" style="width: 55%;"></div>
                  </div>
                  <p class="mb-0 text-white small-font">cast
                    <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span>
                  </p>
                  <span class="stretched-link"></span>
                </div>
              </a>
            </div>            
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="/" class="text-decoration-none">
                <div class="card-body">
                  <h5 class="text-white mb-0">Peran<span class="float-right"><i class="zmdi zmdi-mood"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Tabel<span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </a>
            </div>
        </div>
    </div>
 
@endsection