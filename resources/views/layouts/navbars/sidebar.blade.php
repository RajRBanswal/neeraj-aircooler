<?php $pageSlug = 0; ?>
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li >
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a href="{{url('/all-supplier')}}" class="dropdown-btn">Supplier  
                  <i class="fas fa-industry"></i>
                </a>
            </li>
            <li>
                <a href="{{url('/add-product')}}" class="dropdown-btn">Investment 
                  <i class="fa fa-money" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="{{url('/add-product')}}" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Add Products') }}</span>
                </a>
            </li>
            <li>
                <a class="dropdown-btn">Settings <i class="fa fa-caret-down"></i></a>
                  <div class="dropdown-container">
                    <a href="{{url('/taxes')}}">Taxes</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                  </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                </a>
            </li>
            <li >
                <a href="">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li>
                  <a class="dropdown-btn">Settings <i class="fa fa-caret-down"></i>
                    
                  </a>
                  <div class="dropdown-container">
                    <a href="{{url('/taxes')}}">Taxes</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                  </div>
            </li>
            <li class=" bg-info">
                <a href="">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<style type="text/css">
    .nav li{
        list-style: none;
    }
    .sidebar-wrapper{
        padding-bottom: 100px;
    }
    /* Style the sidenav links and the dropdown button */
.nav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #fff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.nav a:hover, .dropdown-btn:hover {
  color: #fff;
  background-color: #000;
  border-radius: 50px;
  text-align: center;
}
/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  /*background-color: green;*/
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: transparent;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
</style>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
