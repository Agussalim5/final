@extends('front.layouts.landing')

@section('content')

<div class="section about-us" id="contact">
    <div class="container" >
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Mengapa Memilih Kami?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <p>
                  Di REFILM, kami berdedikasi untuk memberikan ulasan film yang objektif dan mendetail. Tim kami terdiri dari para penulis dan kritikus film berpengalaman yang memiliki hasrat mendalam terhadap dunia sinema. Kami menonton, menganalisis,
                  dan menulis ulasan dengan tujuan memberikan informasi yang berguna dan menghibur bagi para pembaca.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Apa yang Kami Tawarkan?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    Ulasan Mendalam: Setiap ulasan film kami mencakup analisis mendalam tentang plot, karakter, sinematografi, dan banyak lagi.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Update film terbaru
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>
                    kami akan slalu mengupdate film-film terbaru beserta ularan dari team kami.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Rekomendasi Film
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Tidak tahu film apa yang harus ditonton? Kami memiliki berbagai rekomendasi yang sesuai dengan berbagai selera dan suasana hati.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Tentang Kami</h6>
            <h2>Apa yang Membuat Kami Menjadi Situs Review Film Terbaik?</h2>
            <p>Selamat datang di REFILM, tempat terbaik untuk menemukan ulasan film yang jujur dan mendalam. Kami memahami bahwa setiap film memiliki cerita unik yang pantas untuk dieksplorasi dan diapresiasi. Di sinilah kami hadir, untuk membantu Anda menemukan film-film yang layak untuk ditonton.

            </p>
            <div class="main-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>Daftar Film</h2>
            <h6> genre</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row event_box">
      @foreach($movie as $film)
      <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
        <div class="events_item">
          <div class="thumb">
            <a href="#"><img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}"></a>
            <span class="category">{{ $film->genre->nama }}</span>
            <span class="price"><h6>{{ $film->tahun }}</h6></span>
          </div>
          <div class="down-content">
            <span class="author"><h4>{{ $film->judul }}</h4></span>
            <p>{{ Str::limit($film->ringkasan, 20) }}</p>
          </div>
        </div>
      </div>
      @endforeach 
    </div>
  </div>  
  <div class="section testimonials" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the website to download free templates. Thank you for visiting.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Full Stack Master</span>
                <h4>Claude David</h4>
              </div>
            </div>
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">UI Expert</span>
                <h4>Thomas Jefferson</h4>
              </div>
            </div>
            <div class="item">
              <p>“Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Digital Animator</span>
                <h4>Stella Blair</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>ULASAN</h6>
            <h2>TOP REVIEWER</h2>
            <p>
              kamu dapat melihat top reviewer yang kami unggah setiap minggu secara gratis..
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('/front/assets/images/member-01.jpg') }}" alt="">
              <span class="category">UX Teacher</span>
              <h4>Agus salim</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('/front/assets/images/member-02.jpg') }}" alt="">
              <span class="category">Graphic Teacher</span>
              <h4>Ardi</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('/front/assets/images/member-03.jpg') }}" alt="">
              <span class="category">Full Stack Master</span>
              <h4>Maharami</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('/front/assets/images/member-04.jpg') }}" alt="">
              <span class="category">Digital Animator</span>
              <h4>Teguh</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection