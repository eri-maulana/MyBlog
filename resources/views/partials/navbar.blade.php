<nav class="navbar navbar-expand-lg bg-secondary"  data-bs-theme="dark">
   <div class="container">
     <a class="navbar-brand" href="/">My Blog</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <div class="navbar-nav">
         <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
         <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
         <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
         <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
       </div>
     </div>
   </div>
 </nav>