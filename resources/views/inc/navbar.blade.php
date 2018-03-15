   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h3 class="my-0 mr-md-auto font-weight-bold badge-pill badge-secondary">Basic App</h3>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark {{ Request::is('/') ? 'font-weight-bold' : '' }}" href="/">Home</a>
        <a class="p-2 text-dark {{ Request::is('about') ? 'font-weight-bold' : '' }}" href="/about">About</a>
        <a class="p-2 text-dark {{ Request::is('contact') ? 'font-weight-bold' : '' }}" href="/contact">Contact</a>
        <a class="p-2 text-dark {{ Request::is('messages') ? 'font-weight-bold' : '' }}" href="/messages">Messages</a>
      </nav>
    </div>