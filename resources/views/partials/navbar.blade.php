<nav class="navbar navbar-expand-lg bg-secondary fixed-top mb-5"  data-bs-theme="dark">
   <div class="container">
     <a class="navbar-brand" href="/">My Blog</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>

      </ul>
         <ul class="navbar-nav ms-auto ">
          @auth
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/dashboard" class="dropdown-item"> <i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a>
                </li>
                <li><hr class="dropown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link {{ $active === "login" ? 'active' : '' }}" ><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
       </ul>

       </div>
     </div>
   </div>
 </nav>