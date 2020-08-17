@php
$count = 0;
@endphp

<section id="mu-slider">
  <div class="mu-slider-area">
    <!-- Top slider -->
    <div class="mu-top-slider">
      @foreach($sliders as $slider)
      <!-- Top slider single slide -->
      <div class="mu-top-slider-single @if($count == 0){ active } @endif">
        <img src="{{url('public/upload/'.$slider->image)}}" alt="img">
        <!-- Top slider content -->
        <div class="mu-top-slider-content">
          <span class="mu-slider-small-title">Welcome</span>
          <h2 class="mu-slider-title">{{$slider->short_title}}</h2>
          <p>{{$slider->long_title}}</p>

        </div>
        <!-- / Top slider content -->
      </div>
      <!-- / Top slider single slide -->
      @php
      $count++
      @endphp
      @endforeach
    </div>
  </div>
</section>
