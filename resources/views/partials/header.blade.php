{{-- <header>
    <div class="logo">
        <img>
    </div>
</header> --}}

<header class="main_header">
    <div class="logo-header">
        <img src="{{ asset('images.dc-logo.png') }}" alt="">
    </div>
    <div>
        @php
            
            $links = [
                [
                    'text' => 'CHARACTERS',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'COMICS',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'MOVIE',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'TV',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'GAMES',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'COLLECTIBLES',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'VIDEOS',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'FANS',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'NEWS',
                    'href' => 'http://localhost/comics',
                ],
                [
                    'text' => 'SHOP',
                    'href' => 'http://localhost/comics',
                ],
            ];
        @endphp

        <nav class="nav">
            @foreach ($links as $link)
                <ul class="list">
                    <li class="nav-link ">
                        <a>
                            {{ $link['text'] }}
                        </a>
                    </li>
                </ul>
            @endforeach
        </nav>
    </div>
</header>