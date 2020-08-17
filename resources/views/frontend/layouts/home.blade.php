@extends('frontend.layouts.master')

@section('content')


  @include('frontend.layouts.slider')
  @include('frontend.layouts.about')

<!-- Start Counter Section -->
<section id="mu-counter">
  <div class="mu-counter-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-counter-area">
          <ul class="mu-counter-nav">
            <li class="col-md-3 col-sm-3 col-xs-12">
              <div class="mu-single-counter">
                <span>Fresh</span>
                <h3><span class="counter">55</span><sup>+</sup></h3>
                <p>Breakfast Items</p>
              </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-12">
              <div class="mu-single-counter">
                <span>Delicious</span>
                <h3><span class="counter">130</span><sup>+</sup></h3>
                <p>Lunch Items</p>
              </div>
            </li>
             <li class="col-md-3 col-sm-3 col-xs-12">
              <div class="mu-single-counter">
                <span>Hot</span>
                 <h3><span class="counter">35</span><sup>+</sup></h3>
                <p>Coffee Items</p>
              </div>
            </li>
             <li class="col-md-3 col-sm-3 col-xs-12">
              <div class="mu-single-counter">
                <span>Satisfied</span>
                <h3><span class="counter">3562</span><sup>+</sup></h3>
                <p>Customers</p>
              </div>
            </li>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Counter Section -->

@include('frontend.layouts.menu')

<!-- Start Reservation section -->
<section id="mu-reservation" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-reservation-area">
          <div class="mu-title">
            <span class="mu-subtitle">Make A</span>
            <h2>Reservation</h2>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-reservation-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quidem autem iusto, perspiciatis, amet, quaerat blanditiis ducimus eius recusandae nisi aut totam alias consectetur et.</p>
            <form class="mu-reservation-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control">
                      <option value="0">How Many?</option>
                      <option value="1 Person">1 Person</option>
                      <option value="2 People">2 People</option>
                      <option value="3 People">3 People</option>
                      <option value="4 People">4 People</option>
                      <option value="5 People">5 People</option>
                      <option value="6 People">6 People</option>
                      <option value="7 People">7 People</option>
                      <option value="8 People">8 People</option>
                      <option value="9 People">9 People</option>
                      <option value="10 People">10 People</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="datepicker" placeholder="Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone No">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <button type="submit" class="mu-readmore-btn">Make Reservation</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Reservation section -->


<!-- Start Gallery -->
<section id="mu-gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-gallery-area">
          <div class="mu-title">
            <span class="mu-subtitle">Discover</span>
            <h2>Our Gallery</h2>
          </div>
          <div class="mu-gallery-content">
            <!-- Start gallery image -->
            <div class="mu-gallery-body" id="mixit-container-2">
              <!-- start single gallery image -->
              @foreach($foods as $food)
              <div class="mu-single-gallery col-md-4 mix food ">
                <div class="mu-single-gallery-item">
                 <figure class="mu-single-gallery-img">
                    <a href="#"><img alt="img" src="{{url('public/upload/'.$food->image)}}"></a>
                  </figure>
                  <div class="mu-single-gallery-info">
                    <a href="{{url('public/upload/'.$food->image)}}" data-fancybox-group="gallery" class="fancybox">
                      <img src="{{asset('public/frontend')}}/assets/img/plus.png" alt="plus icon img">
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- End single gallery image -->

              @foreach($restaurants as $restaurant)

              <div class="mu-single-gallery col-md-4 mix restaurant2">
                <div class="mu-single-gallery-item">
                  <figure class="mu-single-gallery-img">
                    <a href="#"><img alt="img" src="{{url('public/upload/'.$restaurant->image)}}"></a>
                  </figure>
                  <div class="mu-single-gallery-info">
                    <a href="{{url('public/upload/'.$restaurant->image)}}" data-fancybox-group="gallery" class="fancybox">
                      <img src="{{asset('public/frontend')}}/assets/img/plus.png" alt="plus icon img">
                    </a>
                  </div>
                </div>
              </div>
              <!-- End single gallery image -->
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Gallery -->
<!-- Start Client Testimonial section -->
<section id="mu-client-testimonial">
  <div class="mu-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-client-testimonial-area">
            <div class="mu-title">
              <span class="mu-subtitle">Testimonials</span>
              <h2>What Customers Say</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <!-- testimonial content -->
            <div class="mu-testimonial-content">
              <!-- testimonial slider -->
              <ul class="mu-testimonial-slider">
                <li>
                  <div class="mu-testimonial-single">
                    <div class="mu-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="mu-testimonial-bio">
                      <p>- David Muller</p>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="mu-testimonial-single">
                    <div class="mu-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="mu-testimonial-bio">
                      <p>- David Muller</p>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="mu-testimonial-single">
                    <div class="mu-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="mu-testimonial-bio">
                      <p>- David Muller</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Client Testimonial section -->

<!-- Start Subscription section -->
<section id="mu-subscription">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-subscription-area">
          <form class="mu-subscription-form">
            <input type="text" placeholder="Type Your Email Address">
            <button class="mu-readmore-btn" type="Submit">SUBSCRIBE</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Subscription section -->



<!-- Start Latest News -->
<section id="mu-latest-news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-latest-news-area">
          <div class="mu-title">
            <span class="mu-subtitle">Latest News</span>
            <h2>FROM OUR BLOG</h2>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-latest-news-content">
            <div class="row">
              <!-- start single blog -->
            @foreach($blogs as $blog)
              <div class="col-md-4 my-3">
                <article class="mu-news-single">
                  <figure class="mu-news-img">
                    <a href="#" data-toggle="modal" data-target="#blog{{$blog->id}}"><img src="{{url('public/upload/'.$blog->image)}}" alt="img"></a>
                  </figure>
                  <div class="mu-news-single-content">
                    <ul class="mu-meta-nav">
                      <li>Date: {{date('d-m-Y',strtotime($blog->date))}}</li>
                    </ul>
                      <h4>{{$blog->short_title}}</h4>
                    <div class="mu-news-single-bottom">
                      <a href="blog-single.html" class="mu-readmore-btn" data-toggle="modal" data-target="#blog{{$blog->id}}">View</a>
                    </div>
                  </div>
                </article>
              </div>


                  <!-- Modal -->
                  <div class="modal fade" id="blog{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title text-center">{{$blog->short_title}}</h3>
                        </div>
                        <div class="modal-body">
                          <img src="{{url('public/upload/'.$blog->image)}}" alt="img" width="300" height="250">
                          <p class="lead m-3">{{$blog->long_title}}</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Latest News -->

@include('frontend.layouts.contact')

<!-- Start Map section -->
<section id="mu-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
</section>
<!-- End Map section -->

@endsection
