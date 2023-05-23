@php
    $footer_link = [
        'dc comics' => [
            [
                'name' => 'Characters',
                'url' => '/characters',
            ],
            [
                'name' => 'Comics',
                'url' => '/',
            ],
            [
                'name' => 'Movies',
                'url' => '/movies',
            ],
            [
                'name' => 'TV',
                'url' => '/tv',
            ],
            [
                'name' => 'Games',
                'url' => '/games',
            ],
            [
                'name' => 'Videos',
                'url' => '/videos',
            ],
            [
                'name' => 'News',
                'url' => '/news',
            ],
        ],
        'dc' => [
            [
                'name' => 'Terms of Use',
                'url' => '#',
            ],
            [
                'name' => 'Privacy Policy(New)',
                'url' => '#',
            ],
            [
                'name' => 'Ad Choice',
                'url' => '#',
            ],
            [
                'name' => 'Adverstring',
                'url' => '#',
            ],
            [
                'name' => 'Jobs',
                'url' => '#',
            ],
            [
                'name' => 'CPCS Certificates',
                'url' => '#',
            ],
            [
                'name' => 'Subscriptions',
                'url' => '#',
            ],
            [
                'name' => 'Talent Workshops',
                'url' => '#',
            ],
            [
                'name' => 'Ratings',
                'url' => '#',
            ],
            [
                'name' => 'Shop Help',
                'url' => '#',
            ],
            [
                'name' => 'Contact us',
                'url' => '#',
            ],
        ],
        'sites' => [
            [
                'name' => 'DC',
                'url' => '#',
            ],
            [
                'name' => 'MAD magazine',
                'url' => '#',
            ],
            [
                'name' => 'DC Kids',
                'url' => '#',
            ],
            [
                'name' => 'DC Universe',
                'url' => '#',
            ],
            [
                'name' => 'DC Power Visa',
                'url' => '#',
            ],
        ],
        'shop' => [
            [
                'name' => 'Shop DC',
                'url' => '#',
            ],
            [
                'name' => 'Shop DC Collectables',
                'url' => '#',
            ],
        ],
    ];
@endphp

<footer>
    <!-- footer top -->
    <section class="footer-top">
        <div class="ms_container">
            <div class="footer-top-link">
                @foreach ($footer_link as $heading => $value)
                    <div class="ms_card py-4 ps-2">
                        <h2> {{ $heading }} </h2>
                        <ul>
                            @foreach ($footer_link[$heading] as $index => $item)
                                <li><a href="">{{ $item['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="footer-top-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </section>
    <!-- /footer top -->

    <!-- footer bottom -->
    <section class="footer-bottom">
        <div class="ms_container">
            <button>SIGN-UP NOW!</button>
            <ul>
                <li><a href="">FOLLOW US</a></li>
                <li v-for="(item, index) in socialImg" :key="index">
                    <a :href="item.url">
                        <img :src="getImgPath(item)" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- /footer bottom -->
</footer>
