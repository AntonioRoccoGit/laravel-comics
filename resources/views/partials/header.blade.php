@php
    $header_links = [
        [
            'name' => 'characters',
            'url' => '/characters',
        ],
        [
            'name' => 'comics',
            'url' => '/',
        ],
        [
            'name' => 'movies',
            'url' => '/movies',
        ],
        [
            'name' => 'tv',
            'url' => '/tv',
        ],
        [
            'name' => 'games',
            'url' => '/games',
        ],
        [
            'name' => 'collectibles',
            'url' => '/collectibles',
        ],
        [
            'name' => 'videos',
            'url' => '/videos',
        ],
        [
            'name' => 'fans',
            'url' => '/fans',
        ],
        [
            'name' => 'news',
            'url' => '/news',
        ],
        [
            'name' => 'shop',
            'url' => '/shop',
        ],
    ];
@endphp

<header>
    <div class="ms_container">
        <section class="header">
            <div class="logo">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </a>
            </div>
            <div class="link">

                <ul>
                    @foreach ($header_links as $link)
                        <li> <a href="{{ $link['url'] }}"> {{ $link['name'] }} </a></li>
                    @endforeach
                </ul>

            </div>
        </section>
    </div>
</header>
