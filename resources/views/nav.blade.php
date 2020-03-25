<nav class="navbar navbar-expand navbar-dark purple-gradient">

  <a class="navbar-brand" href="/"><i class="far fa-heart mr-1"></i>Hanamaru</a>

  <ul class="navbar-nav ml-auto">

  @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
    @endguest

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest

    @auth
    <li class="nav-item">
    <a class="nav-link" href="{{ route('flowers.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth

  </ul>

</nav>