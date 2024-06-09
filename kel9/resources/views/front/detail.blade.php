@extends('front.layouts.landing')

@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="mb-4">
                    <a href="#" class="h1 display-5">
                        {{ $movie->judul }}
                    </a>
                </div>
                <div class="position-relative rounded overflow-hidden mb-3">
                    <img src="{{ asset('storage/' . $movie->poster) }}" class="img-zoomin img-fluid rounded w-100" alt="">
                    <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">                                              
                        {{ $movie->genre->nama }}
                    </div>
                </div>
                <p class="my-4">
                    {{ $movie->ringkasan }}
                </p>
                <p class="my-4">
                   
                </p>
                <div class="bg-light p-4 mb-4 rounded border-start border-3 border-primary">
                    <h1 class="mb-2"></h1>
                </div>
                <div class="bg-light rounded p-4">
                    <h4 class="mb-4">Comments</h4>
                    <div class="p-4 bg-white rounded mb-4">
                        <div class="row g-4">
                            <div class="col-3">
                                <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="d-flex justify-content-between">
                                    <h5>James Boreego</h5>
                                    <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                </div>
                                <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white rounded mb-0">
                        <div class="row g-4">
                            <div class="col-3">
                                <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="d-flex justify-content-between">
                                    <h5>James Boreego</h5>
                                    <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                </div>
                                <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded p-4 my-4">
                    <h4 class="mb-4">Leave A Comment</h4>
                    <form action="#">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <input type="text" class="form-control py-3" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control py-3" placeholder="Email Address">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="textarea" id="" cols="30" rows="7" placeholder="Write Your Comment Here"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="form-control btn btn-primary py-3" type="button">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="p-3 rounded border">
                            <h4 class="mb-4">Nama film</h4>
                            <div class="row g-2">
                                <div class="col-12">
                                    <a href="" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        {{ $movie->judul }}
                                    </a>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <a href="/" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">BackHome</a>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-bottom my-3 pb-3">
                                        <h4 class="mb-0">Genre film</h4>
                                    </div>
                                    <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;"> {{ $movie->genre->nama }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection