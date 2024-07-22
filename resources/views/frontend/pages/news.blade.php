<!DOCTYPE html>
<html lang="id">
@include('frontend.includes.head')
    <link rel="stylesheet" href="{{asset('frontend/css/comunity.css')}}"/>
</head>
<body>
@include('frontend.includes.header')
<!-- <div data-include="component/header"></div> -->

        <div class="page">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper bg-img">
                <div class="text-box">
                    <h1 class="appear">{{__ ('news')}}</h1>
                    <p class="appear">{{__ ('news-content')}}</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <div class="row list-wrapper">

                <div class="item-box clear">

                    @foreach($posts as $post)
                    <div class="fl w25">
                        <div class="imx">
                            <a class="item" href="{{$post->source}}">
                                <div class="img-box">
                                    <img src="/backend/images/news/{{$post->image}}" alt="image post {{$post->title}}"/>
                                </div>
                                <span class="publisher">{{parse_url($post->source, PHP_URL_HOST);}}</span>
                                <h3>
                                    {{$post->title}}
                                </h3>
                                <span>{{date('Y.m.d', strtotime($post->created_at));}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>


                @if($posts->hasPages())
            <div class="imx">
                    <div class="pagination">

                        <a href="{{$posts->previousPageUrl()}}" class="arrow">&laquo;</a>
                        <a href="{{$posts->nextPageUrl()}}" class="arrow">&raquo;</a>
                    </div>
                </div>
            </div>
            @endif
            </div>
        </div>


               <!-- <div data-include="component/footer"></div> -->
               @include('frontend.includes.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const appearElements = document.querySelectorAll('.appear');

                function appearOnScroll() {
                    appearElements.forEach((element, index) => {
                        // Jika elemen sudah memiliki class 'active', abaikan
                        if (element.classList.contains('active')) {
                            return;
                        }

                        if (isElementInViewport(element)) {
                            setTimeout(() => {
                                element.classList.add('active');
                            }, index * 200); // Delay munculnya setiap elemen
                        } else {
                            // Hapus class 'active' saat elemen keluar dari viewport
                            element.classList.remove('active');
                        }
                    });
                }

                function isElementInViewport(el) {
                    const rect = el.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }

                // Handler untuk event scroll
                window.addEventListener('scroll', appearOnScroll);

                // Handler untuk event resize (jika ada perubahan ukuran viewport)
                window.addEventListener('resize', appearOnScroll);

                // Panggil sekali ketika halaman dimuat (jika elemen sudah ada di viewport pada awalnya)
                appearOnScroll();
            });
        </script>


    </body>
</html>
