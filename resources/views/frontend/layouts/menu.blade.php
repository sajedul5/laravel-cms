

<!-- Start Gallery -->
<section id="mu-gallery">
  <div class="" id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Menu</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-gallery-content">
              <div class="mu-gallery-top">
                <!-- Start gallery menu -->
                <ul>
                  <!-- <li class="filter active" data-filter="all">ALL</li> -->
                  <li class="filter" data-filter=".food">Meals</li>
                  <li class="filter" data-filter=".drink">Breakfast</li>
                  <li class="filter" data-filter=".restaurant">Snacks</li>
                  <li class="filter" data-filter=".dinner">Drinks</li>
                  <li class="filter" data-filter=".dessert">Desserts</li>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">
              @foreach($menus as $menu)
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix drink">
                  <div class="card" style="width: 16rem;">
                    <img src="{{url('public/upload/'.$menu->image)}}" class="card-img-top" alt="..."width="280" height="250">
                    <div class="card-body">
                      <h4 class="m-auto">{{$menu->title}}</h4>
                      <h4 class="text-center">Price: {{$menu->price}} Tk</h4>
                      <p class="card-text text-center">{{$menu->description}}</p>
                    </div>
                  </div>
                </div>
                <!-- End single gallery image -->
              @endforeach

                @foreach($drinks as $drink)
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix dinner">
                  <div class="card" style="width: 16rem;">
                    <img src="{{url('public/upload/'.$drink->image)}}" class="card-img-top" alt="..."width="280" height="250">
                    <div class="card-body">
                      <h4 class="m-auto">{{$drink->title}}</h4>
                      <h4 class="text-center">Price: {{$drink->price}}</h4>
                      <p class="card-text text-center">{{$drink->description}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                @foreach($meals as $meal)
                <div class="mu-single-gallery col-md-4 mix food">
                  <div class="card" style="width: 16rem;">
                    <img src="{{url('public/upload/'.$meal->image)}}" class="card-img-top" alt="..."width="280" height="250">
                    <div class="card-body">
                      <h4 class="m-auto">{{$meal->title}}</h4>
                      <h4 class="text-center">Price: {{$meal->price}}</h4>
                      <p class="card-text text-center">{{$meal->description}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                @foreach($snacks as $snack)
                <div class="mu-single-gallery col-md-4 mix restaurant">
                  <div class="card" style="width: 16rem;">
                    <img src="{{url('public/upload/'.$snack->image)}}" class="card-img-top" alt="..."width="280" height="250">
                    <div class="card-body">
                      <h4 class="m-auto">{{$snack->title}}</h4>
                      <h4 class="text-center">Price: {{$snack->price}}</h4>
                      <p class="card-text text-center">{{$snack->description}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                @foreach($desserts as $dessert)
                <div class="mu-single-gallery col-md-4 mix dessert">
                  <div class="card" style="width: 16rem;">
                    <img src="{{url('public/upload/'.$dessert->image)}}" class="card-img-top" alt="..."width="280" height="250">
                    <div class="card-body">
                      <h4 class="m-auto">{{$dessert->title}}</h4>
                      <h4 class="text-center">Price: {{$dessert->price}}</h4>
                      <p class="card-text text-center">{{$dessert->description}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- End single gallery image -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Gallery -->
