<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ url('/dashboard') }}">
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ url('articles') }}">
          Articles
        </a>
      </li>
      @if (auth()->user()->role == '1')
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{ url('categories') }}">
            
            Categories
          </a>
        </li>
      @endif

      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ url('config') }}">
          Configuration
        </a>
      </li>
      
     

      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{ url('users') }}">
          Users
        </a>
      </li>
      <li class="nav-item">

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        
        <a class="nav-link d-flex align-items-center gap-2" 
          href="{{ route('logout') }}" 
          onclick="event.preventDefault();    
          document.getElementById('logout-form').submit();">
          Logout
        </a>

      
            
        
      </li>
      
    </ul>

   
  </div> 