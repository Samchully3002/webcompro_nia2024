<!DOCTYPE html>
<html lang="id">
@include('frontend.includes.head')
    <link rel="stylesheet" href="{{asset('frontend/css/comunity.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/custom-pagination.css')}}"/>
</head>
<body>
@include('frontend.includes.header')
<!-- <div data-include="component/header"></div> -->

        <div class="page page-in">
            <div class="notice-wrapper">
                <div class="notice-title">
                    <p class="appear">{{__ ('notice') }}</p>
                </div>
                @foreach($notice as $note)

                <?php
                    
                $locale = Session::get('locale');

                if($locale==null){
                    $locale='en';
                }

                switch ($locale) {
                    case 'id':
                        $note->title = $note->title_id ? $note->title_id : $note->title;
                    break;
                    case 'en':
                        $note->title = $note->title;
                        break;
                    case 'kr':
                        $note->title = $note->title_kr ? $note->title_kr : $note->title;
                        break;
                    default:
                    $note->title = $note->title;
                }
                ?>
                <a class="notice-list" href="/community/notice-detail/{{$note->id}}">
                    <div class="notice-content">
                        <p>{{$note->title;}}</p>
                    </div>
                    <div class="notice-date">
                        <span>{{date('Y.m.d', strtotime($note->date));}}</span>
                        <img src="../../frontend/images/icon/arrow-black.svg" class="language_flag" alt="icon arrow"/>
                    </div>
                </a>

                @endforeach
            </div>
            <!-- @if($notice->hasPages())
            <div class="imx">
                    <div class="pagination">

                        <a href="{{$notice->previousPageUrl()}}" class="arrow">&laquo;</a>
                        <a href="{{$notice->nextPageUrl()}}" class="arrow">&raquo;</a>
                    </div>
                </div>
            </div>
            @endif -->
                    <!-- Custom Pagination -->
        <div class="pagination-container">
            {{ $notice->onEachSide(1)->links('components.custom-pagination') }}
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
