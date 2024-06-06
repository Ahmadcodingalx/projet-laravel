
<nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">E-commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories_list') }}">Catégories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product_create') }}">Produits</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('home') }}">Action</a></li>
              <li><a class="dropdown-item" href="{{ route('home') }}">Autre action</a></li>
              <li><a class="dropdown-item" href="{{ route('home') }}">Autre autre action</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>