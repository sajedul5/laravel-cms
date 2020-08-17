@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp


<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    @if(Auth::user()->usertype=='Admin')
    <li class="nav-item has-treeview  {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage User
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('users.view')}}" class="nav-link {{($route=='/users.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Users</p>
          </a>
        </li>
      </ul>
    </li>
    @endif
    <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Profile
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.view')}}" class="nav-link {{($route=='/profiles.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Your Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='/profiles.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Change Password</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview  {{($prefix=='/logos')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Logo
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('logos.view')}}" class="nav-link {{($route=='/logos.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Logos</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview  {{($prefix=='/sliders')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Slider
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('sliders.view')}}" class="nav-link {{($route=='/sliders.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Slider</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview  {{($prefix=='/breakfast')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Food Menu
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('breakfast.view')}}" class="nav-link {{($route=='/breakfast.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Breakfast</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('meals.view')}}" class="nav-link {{($route=='/meals.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Meals</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('snacks.view')}}" class="nav-link {{($route=='/snacks.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Snacks</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('dessert.view')}}" class="nav-link {{($route=='/dessert.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Desserts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('drink.view')}}" class="nav-link {{($route=='/drink.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Drinks</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/food')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Gallery
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('food.view')}}" class="nav-link {{($route=='/food.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Food</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('restaurant.view')}}" class="nav-link {{($route=='/restaurant.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Restaurant</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/blog')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage News & Events
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('blog.view')}}" class="nav-link {{($route=='/blog.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View News & Events</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/about')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage About
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('about.view')}}" class="nav-link {{($route=='/about.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View About Us</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview  {{($prefix=='/contact')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Contact
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('contact.view')}}" class="nav-link {{($route=='/contact.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Contact Us</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
