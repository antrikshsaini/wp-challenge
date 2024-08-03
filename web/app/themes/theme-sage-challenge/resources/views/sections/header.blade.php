<header class="bg-teal-400 py-8">
  <div class="container mx-auto text-center">  
    <a class="brand" href="{{ home_url('/') }}"> 
    <h1 class="text-2xl font-bold text-black-800">
      {!! $siteName !!}
    </h1>
  </a>
  </div>
  

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
