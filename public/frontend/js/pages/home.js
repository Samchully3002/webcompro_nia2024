// Ambil elemen video
const videoD = document.querySelector('.video-dekstop');
const videoM = document.querySelector('.video-mobile');
// Ambil elemen kontainer video
const container = document.querySelector('.container_video_text');

// Hitung tinggi kontainer video
const containerHeight = container.offsetHeight;

// Tentukan posisi tengah layar vertikal
const middleOfScreen = window.innerHeight / 1;

// Tentukan kapan scaling harus dimulai (misalnya pada 1999px dari atas kontainer)
const startScalingAt = container.offsetTop + containerHeight - middleOfScreen;

// Faktor penurunan kecepatan scaling
const scaleSlowFactor = 0.5; // Sesuaikan nilai ini untuk kecepatan scaling yang diinginkan

// Tambahkan event listener untuk mendeteksi scroll mouse
window.addEventListener('scroll', function() {
    // Dapatkan posisi scroll vertikal saat ini
    let scrollPosition = window.scrollY + middleOfScreen;

    // Hitung nilai scale berdasarkan posisi scroll
    let scaleValue = 1;
    if (scrollPosition >= startScalingAt) {
        scaleValue = 1 - (scrollPosition - startScalingAt) * scaleSlowFactor / (containerHeight - middleOfScreen);
        // Pastikan scaleValue tidak kurang dari 0
        scaleValue = Math.max(scaleValue, 0);
    }

    // Terapkan transformasi pada video tanpa rotasi
    videoD.style.transform = `scale(${scaleValue})`;
    videoM.style.transform = `scale(${scaleValue})`;
});

// end of video animation


document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.item');

    function checkVisibility() {
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);

    // Initial check on load
    checkVisibility();
});

// end of visibility animation

// Mendapatkan elemen vision_text
const visionText = document.getElementById('visi_txt');

// Mendeteksi saat pengguna melakukan scroll
window.addEventListener('scroll', () => {
    // Mendapatkan posisi scroll vertikal saat ini
    const scrollPosition = window.scrollY;

    // Menentukan kondisi untuk mengubah skala
    if (scrollPosition > 0) {
        visionText.style.transform = 'scale(1)';
    } else {
        visionText.style.transform = 'scale(0.5)';
    }
});

// end of vision text animation