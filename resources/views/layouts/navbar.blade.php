<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">
        <img src="{{asset ('/img/logo.png')}}" width="60px" height="50px" class="d-inline-block align-top" alt="">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item " >
          <a class="nav-link"  href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog Saya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        
         @if(Auth()->user() && Auth()->user()->level=="author")
        <li class="nav-item">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown ">
              <a class="dropdown-item" href="/create-blog">Tambah Blog</a>
              <a class="dropdown-item" href="/edit-profil">Edit Profil</a>
            </div>
          </li>
          @endif
          @if(Auth()->user())
          <li class="nav-item">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth()->user()->name}}
              </a>
              <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown ">
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/registrasi">Register</a>
          </li>
          @endif
      </ul>
    </div>
  </nav>