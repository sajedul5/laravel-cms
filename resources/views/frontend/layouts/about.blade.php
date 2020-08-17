<!-- Start About us -->
<section id="mu-about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-about-us-area">
          <div class="mu-title">
            <span class="mu-subtitle">Discover</span>
            <h2>ABOUT US</h2>
            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mu-about-us-left">
               <p>{{$about->about}}</p>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mu-about-us-right d-flex">
                 <img src="{{url('public/upload/'.$about->image)}}" alt="img" width="600" height="500"></li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About us -->
