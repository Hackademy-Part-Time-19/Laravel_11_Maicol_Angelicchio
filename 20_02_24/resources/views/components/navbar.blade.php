<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('index')}}">Libri</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      @guest
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('register')}}">Register</a>
        </li>
      @endguest
      @auth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('book.create')}}">Inserisci</a>
        </li>
        <form action="{{ route('logout')}}" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>
      <li class="nav-item">
          <h2>Ciao {{auth()->user()->name}}</h2>
      </li>
      @endauth
      </ul>
    </div>
  </div>
</nav