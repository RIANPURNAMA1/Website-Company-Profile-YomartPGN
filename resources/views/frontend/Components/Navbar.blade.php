<nav class="navbar navbar-expand-lg shadow shadow-md position-fixed top-0 start-0 end-0 w-full py-4   "  style="z-index: 99">
    <div class="container">
      <div class="d-flex h-15 align-items-center gap-1">
        <img class="" src="https://vivacosmetic.com/themes/teenshop_theme2/assets/img/Yomart.png" alt=""
            width="100">
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-disabled="true">Contact</a>
                </li>
                @auth
                <li class="nav-item ">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class=" btn btn-outline-success ">Logout</button>
                    </form>
                </li>
                @else
                <li class="nav-item ">
                    <a href="/register" class=" btn btn-outline-success ">Daftar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success">|</a>
              </li>
                <li class="nav-item">
                    <a href="/login" class=" btn btn-success ">Login</a>
                </li>

                @endauth
            </ul>
        </div>
    </div>
</nav>
