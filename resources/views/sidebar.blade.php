<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('category.index') ? '' : 'collapsed' }}" href="{{ route('category.index') }}">
          <i class="bi bi-grid"></i>
          <span>Category</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('place.index') ? '' : 'collapsed' }}" href="{{ route('place.index') }}">
          <i class="bi bi-grid"></i>
          <span>Place</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('book.index') ? '' : 'collapsed' }}" href="{{ route('book.index') }}">
          <i class="bi bi-grid"></i>
          <span>Book</span>
        </a>
      </li>
    </ul>

  </aside>