<!DOCTYPE html>
<html lang="id">
@include('frontend.includes.head')
    <link rel="stylesheet" href="{{asset('frontend/css/comunity.css')}}"/>
</head>
<body>
@include('frontend.includes.header')
<!-- <div data-include="component/header"></div> -->

        <div class="page page-in">
            <div class="notice-wrapper">
                <div class="notice-details-title">
                    <p class="appear">{{$notice->title}}</p>
                    <span class="appear">{{$notice->date}}</span>
                    <img class="appear" src="/backend/images/notice/{{$notice->image}}"/>
                </div>
                <div class="notice-details-content">
                    <p>{{$notice->content}}</p>
                </div>
            </div>
            <div class="btn-nav-wrapper">
                @if($prev)
                <a class="prev-notice-btn" href="{{$prev->id}}">
                    <label>&#8249; Previous</label>
                    <label>{{$prev->title}}</label>
                    <label>{{$prev->date}}</label>
                </a>
                @endif

                @if($next)
                <a class="next-notice-btn" href="{{$next->id}}">
                    <label>Next &#8250;</label>
                    <label>{{$next->title}}</label>
                    <label>{{$next->date}}</label>
                </a>
                @endif


                {{-- //mobile button --}}
                @if($prev)
                <a class="prev-notice-btn-mobile" href="{{$prev->id}}">
                    <label>&#8249; Previous</label>
                </a>
                @endif
                @if($next)
                <a class="next-notice-btn-mobile" href="{{$next->id}}">
                    <label>Next &#8250;</label>
                </a>
                @endif
            </div>
            {{-- <div class="imx">
                    <div class="pagination">
                        <a href="#" class="arrow">&laquo;</a>
                        <a href="media.html" class="active">1</a>
                        <a href="media_page2.html">2</a>
                        <a href="media_page3.html">3</a>
                        <a href="#" class="arrow">&raquo;</a>
                    </div>
                </div> --}}
        </div>

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