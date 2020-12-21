<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
    {{-- 호스트 도메인 == 현재 도메인 --}}
    @if ($_SERVER["HTTP_HOST"] == url()->current())
        {{-- 메인화면 일 경우 아래 코드 실행 --}}
        <li class="active"><a href="#silver"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Career</span></a></li>
        <li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services"><i class="bx bx-server"></i> <span>Strength</span></a></li>
        <li><a href="{{ url('/list') }}"><i class="bx bx-chalkboard"></i> <span>Board</span></a></li>
    @else
        {{-- 메인 화면이 아닐경우 아래 코드 실행 (게시판 화면 -> 루트 페이지에서 ID호출) --}}
        <li><a href="/#silver"><i class="bx bx-home"></i> <span>Home</span></a></li>    
        <li><a href="/#about"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="/#resume"><i class="bx bx-file-blank"></i> <span>Career</span></a></li>
        <li><a href="/#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="/#services"><i class="bx bx-server"></i> <span>Strength</span></a></li>
        <li class="active"><a href="{{ url('/list') }}"><i class="bx bx-chalkboard"></i> <span>Board</span></a></li>
    @endif
    </nav><!-- .nav-menu -->
</header><!-- End Header -->