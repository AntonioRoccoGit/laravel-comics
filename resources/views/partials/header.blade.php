@php
    $header_links = [
        'characters' => [
            'url' => '/characters',
        ],
        'comics' => [
            'url' => '/comics',
        ],
        'movies' => [
            'url' => '/movies',
        ],
        'tv' => [
            'url' => '/tv',
        ],
        'characters' => [
            'url' => '/characters',
        ],
        'games' => [
            'url' => '/games',
        ],
        'collectibles' => [
            'url' => '/collectibles',
        ],
    ];
@endphp

<header>
    <div class="container">
        <section class="header">
            <div class="logo">
                <a href="#">
                    <img src="../assets/img/dc-logo.png" alt="">
                </a>
            </div>
            <div class="link">

                <ul>
                    @foreach ($header_links as $key => $link)
                        <li> <a href=""> {{ $key }} </a></li>
                    @endforeach
                </ul>

            </div>
        </section>
    </div>
</header>
