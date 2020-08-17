<!-- Start Contact section -->
<section id="mu-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">
          <div class="mu-title">
            <span class="mu-subtitle">Get In Touch</span>
            <h2>Contact Us</h2>

            <i class="fa fa-spoon"></i>
            <span class="mu-title-bar"></span>
          </div>
          <div class="mu-contact-content">
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  @if(Session::get('success'))
                    <strong class="text-success">{{Session::get('success')}}</strong>
                  @endif
                  <form class="mu-contact-form" action="{{route('message.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input type="text" class="form-control " name="name" placeholder="Name">
                      <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Email">
                      <span class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                      <span class="text-danger">{{($errors->has('subject'))?($errors->first('subject')):''}}</span>
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Type Your Message"></textarea>
                      <span class="text-danger">{{($errors->has('message'))?($errors->first('message')):''}}</span>
                    </div>
                    <button type="submit" class="mu-send-btn">Send Message</button>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                  <div class="mu-contact-widget">
                    <h3>Office Address</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia temporibus corporis ea non consequatur porro corrupti hic voluptatibus assumenda, doloribus.</p>
                    <address>
                      <p><i class="fa fa-phone"></i> {{$contact->phone}}</p>
                      <p><i class="fa fa-envelope-o"></i>{{$contact->email}}</p>
                      <p><i class="fa fa-map-marker"></i>{{$contact->address}}</p>
                    </address>
                  </div>
                  <div class="mu-contact-widget">
                    <h3>Open Hours</h3>
                    <address>
                      <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                      <p><span>Saturday</span> 9.00 am to 10 pm</p>
                      <p><span>Sunday</span> 10.00 am to 12 pm</p>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact section -->
