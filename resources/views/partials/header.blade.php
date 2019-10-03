
<nav style="position:fixed;top:0;left:0;width:100%;z-index:1;" class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse " id="navbarSupportedContent"  style="width:100%:">
      <ul class="navbar-nav mr-auto " >
        <li class="nav-item active">
          <a class="nav-link" href="/">Products <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown" > 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         @foreach ($categories as $category)
        <a class="dropdown-item" href="/categories/{{$category->id}}">{{$category->name}}     </a>
           
         <div class="dropdown-divider"></div>
          @endforeach
         
         
          </div>
           
           
    </ul>
    <ul class="navbar-nav "  id="dropDownNav" style="margin-right:100px;float-right" >
            <li class="nav-item dropdown">
            <a class="nav-link" href="/shoppingCart">
               <i class="success  fas fa-shopping-cart"></i> 
              Shopping Cart
                <span class="badge">
                {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}
                </span>
              </a>  
     </li>
        <li class="nav-item dropdown" > 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="success fas fa-user"></i>  Account
                </a>
                @guest
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href=" {{ route('login') }}">{{ __('Login') }}      </a>
                 
                  <div class="dropdown-divider"></div>
                  @if (Route::has('register'))
                  <a class="dropdown-item" href="{{ route('register') }}">{{ __('Sign Up') }}
                  </a>
                 
              @endif 
                  </a>
                </div>
                @else
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/home "  >   {{ Auth::user()->name }}           </a>
                   
                    <div class="dropdown-divider"></div>
                   
                    <a class="dropdown-item" href="{{ route('logout') }}"    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                   
                @endguest
                
              </li>
        
    </ul>
      
    </div>
  </nav>