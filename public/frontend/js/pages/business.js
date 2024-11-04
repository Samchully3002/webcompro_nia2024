var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x1 = document.getElementsByClassName("mySlides1");
            var x2 = document.getElementsByClassName("mySlides2");
            var x3 = document.getElementsByClassName("mySlides3");
            var x4 = document.getElementsByClassName("mySlides4");
            if (n > x1.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x1.length}
            for (i = 0; i < x1.length; i++) {
                x1[i].style.display = "none";
            }
            x1[slideIndex-1].style.display = "block";

            if (n > x2.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x2.length}
            for (i = 0; i < x2.length; i++) {
                x2[i].style.display = "none";
            }
            x2[slideIndex-1].style.display = "block";

            if (n > x3.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x3.length}
            for (i = 0; i < x3.length; i++) {
                x3[i].style.display = "none";
            }
            x3[slideIndex-1].style.display = "block";

            if (n > x4.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x4.length}
            for (i = 0; i < x4.length; i++) {
                x4[i].style.display = "none";
            }
            x4[slideIndex-1].style.display = "block";
            }

            let myLabels = document.querySelectorAll('.lbl-toggle');

            Array.from(myLabels).forEach(label => {
            label.addEventListener('keydown', e => {
                // 32 === spacebar
                // 13 === enter
                if (e.which === 32 || e.which === 13) {
                e.preventDefault();
                label.click();
                };
            });
            });

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