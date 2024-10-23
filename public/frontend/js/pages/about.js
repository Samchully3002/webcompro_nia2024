var imgMap = document.getElementById('officeLoc');
var btnloc = document.getElementById('btn_loc');
function changeMapIndonesia() {
    imgMap.src = "../frontend/images/map_indonesia.png";
    // document.getElementById('locIndo').checked = true
    document.getElementById('locMalay').checked = false
    document.getElementById('locKor').checked = false
}
function changeMapMalaysia() {
    imgMap.src = "../frontend/images/map_malaysia.png";
    document.getElementById('locIndo').checked = false
    // document.getElementById('locMalay').checked = false
    document.getElementById('locKor').checked = false
}
function changeMapKorea() {
    imgMap.src = "../frontend/images/map_korea.png";
    document.getElementById('locIndo').checked = false
    document.getElementById('locMalay').checked = false
    // document.getElementById('locKor').checked = false
}
document.addEventListener("DOMContentLoaded", function () {
    const appearElements = document.querySelectorAll(".muncul");

    function appearOnScroll() {
        appearElements.forEach((element, index) => {
            // Jika elemen sudah memiliki class 'active', abaikan
            if (element.classList.contains("active")) {
                return;
            }

            if (isElementInViewport(element)) {
                setTimeout(() => {
                    element.classList.add("active");
                }, index * 200); // Delay munculnya setiap elemen
            } else {
                // Hapus class 'active' saat elemen keluar dari viewport
                element.classList.remove("active");
            }
        });
    }

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <=
                (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Handler untuk event scroll
    window.addEventListener("scroll", appearOnScroll);

    // Handler untuk event resize (jika ada perubahan ukuran viewport)
    window.addEventListener("resize", appearOnScroll);

    // Panggil sekali ketika halaman dimuat (jika elemen sudah ada di viewport pada awalnya)
    appearOnScroll();
});

const leftContent = document.querySelector(".left-content");
const bannerWrapper = document.querySelector(".banner-wrapper");
const rightContent = document.querySelector(".right-content");

// Buat instance Intersection Observer
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                leftContent.classList.add("appear"); // Tambahkan kelas appear jika elemen masuk dalam viewport
                rightContent.classList.add("appear"); // Tambahkan kelas appear pada right-content
            } else {
                leftContent.classList.remove("appear"); // Hapus kelas appear jika elemen keluar dari viewport
                // Reset transform ke nilai awal saat elemen keluar dari viewport
                leftContent.style.transition = "transform 0.5s ease";
                leftContent.style.transform = "scale(0.9)";
                rightContent.classList.remove("appear"); // Hapus kelas appear pada right-content
            }
        });
    },
    {
        threshold: 0.5, // Atur threshold ke 0.5, artinya elemen akan dianggap masuk saat setengahnya terlihat
    }
);

// Amati elemen .left-content
observer.observe(leftContent);

// Event listener untuk efek parallax
bannerWrapper.addEventListener("mousemove", function (e) {
    // Ambil lebar dan tinggi dari banner-wrapper
    const width = bannerWrapper.offsetWidth;
    const height = bannerWrapper.offsetHeight;

    // Hitung persentase perpindahan mouse di dalam banner-wrapper
    const mouseX = e.pageX;
    const mouseY = e.pageY;
    const offsetX = (mouseX / width - 0.5) * 60; // Percepat faktor pengali ke 60
    const offsetY = (mouseY / height - 0.5) * 60; // Percepat faktor pengali ke 60

    // Transformasi left-content berdasarkan perpindahan mouse
    if (leftContent.classList.contains("appear")) {
        leftContent.style.transition = "transform 0.2s ease"; // Ubah transition saat appear
    } else {
        leftContent.style.transition = "transform 0.5s ease"; // Kembalikan transition ke semula jika tidak appear
    }
    leftContent.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
});

// Event listener untuk mengatur kembali ke awal saat mouse meninggalkan bannerWrapper
bannerWrapper.addEventListener("mouseleave", function () {
    leftContent.style.transition = "transform 1s ease";
    leftContent.style.transform = "scale(1)";
});

// Buat elemen tooltip
const tooltip = document.createElement("div");
tooltip.className = "tooltip";
tooltip.textContent = "Mr. Son Dong-kwon";
document.body.appendChild(tooltip);

// Track mouse movements on img_wrapper
const imageContainer = document.querySelector(".img_wrapper");

// Fungsi untuk menampilkan tooltip
function showTooltip(event) {
    // Hitung posisi tooltip
    const tooltipWidth = tooltip.offsetWidth;
    const tooltipHeight = tooltip.offsetHeight;
    const mouseX = event.clientX;
    const mouseY = event.clientY;

    // Set posisi tooltip di tengah kursor mouse
    tooltip.style.left = `${mouseX}px`;
    tooltip.style.top = `${mouseY}px`;

    // Tampilkan tooltip
    tooltip.style.display = "block";

    // Sembunyikan kursor default
    document.body.style.cursor = "none";
}

// Fungsi untuk menyembunyikan tooltip
function hideTooltip() {
    tooltip.style.display = "none";
    document.body.style.cursor = "auto"; // Kembalikan kursor ke nilai default
}

// Fungsi untuk menambahkan event handler tooltip
function addTooltipEvents() {
    imageContainer.addEventListener("mousemove", showTooltip);
    imageContainer.addEventListener("mouseleave", hideTooltip);
}

// Fungsi untuk menghapus event handler tooltip
function removeTooltipEvents() {
    imageContainer.removeEventListener("mousemove", showTooltip);
    imageContainer.removeEventListener("mouseleave", hideTooltip);
}

// Deteksi ukuran layar dan sesuaikan event handler
function handleResize() {
    if (window.innerWidth > 1140) {
        addTooltipEvents(); // Tambahkan event handler pada versi desktop
    } else {
        removeTooltipEvents(); // Hapus event handler pada versi mobile
    }
}

// Jalankan handleResize pada load dan resize
window.addEventListener("load", handleResize);
window.addEventListener("resize", handleResize);

///////////////////// ini script our history ///////////////////////////
$(document).ready(function () {
    $(document).on("scroll", function () {
        var windowHeight = $(window).height(); // Tinggi jendela browser
        var scrollPosition = $(document).scrollTop() + windowHeight / 2; // Scroll position di tengah jendela browser

        $(".list_history ul").each(function () {
            let elementOffsetTop = $(this).offset().top;
            let elementOffsetBottom = $(this).offset().down;

            if (elementOffsetTop <= scrollPosition) {
                // Tambahkan kelas 'active' untuk mengatur opacity ke 1
                $(this).addClass("active");
            } else {
                // Hapus kelas 'active' untuk mengatur opacity ke 0.2
                $(this).removeClass("active");
            }
        });

        // Ganti gambar dan teks berdasarkan scrollPosition
        $(".list_history ul.active").each(function () {
            let liClass = $(this).attr("class"); // Ambil class dari elemen ul
            let year = liClass.match(/\d{4}/)[0]; // Ambil tahun dari class (contoh: hist_2024)
            // $('.container-imageyear img').toggleClass('bounce-img');
            // Ganti gambar dan teks berdasarkan tahun
            let image = $("#year_img");
            let yearname = $("#year_history");

            switch (year) {
                case "2024":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2024.png");
                    yearname.text("2024");
                    break;
                case "2023":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2023.png");
                    yearname.text("2023");
                    break;
                case "2022":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2022.png");
                    yearname.text("2022");
                    break;
                case "2021":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2021.png");
                    yearname.text("2021");
                    break;
                case "2020":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2020.png");
                    yearname.text("2020");
                    break;
                case "2019":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2019.png");
                    yearname.text("2019");
                    break;
                case "2018":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2018.png");
                    yearname.text("2018");
                    break;
                case "2017":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2017.png");
                    yearname.text("2017");
                    break;
                case "2016":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2016.png");
                    yearname.text("2016");
                    break;
                case "2015":
                    $('.container-imageyear')
                    image.attr("src", "../frontend/images/story2015.png");
                    yearname.text("2015");
                    break;
                case "2014":
                    $('.container-imageyear').toggleClass('bounce-img');
                    image.attr("src", "../frontend/images/story2014.png");
                    yearname.text("2014");
                    break;
                default:
                    image.attr(
                        "src",
                        "{{asset('frontend/assets/images/story2024.png')}}"
                    );
                    yearname.text("2024");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".container-imageyear");

    function checkVisibility() {
        elements.forEach((element) => {
            const rect = element.getBoundingClientRect();
            if (rect.top > window.innerHeight && rect.bottom >= 0) {
                element.classList.add("visible");
            } else {
                element.classList.remove("visible");
            }
        });
    }

    window.addEventListener("scroll", checkVisibility);
    window.addEventListener("resize", checkVisibility);

    // Initial check on load
    checkVisibility();
});
