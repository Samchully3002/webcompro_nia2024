
var slideIndex = 1;
let myLabels = document.querySelectorAll('.lbl-toggle');
showDivs(slideIndex);

var x1 = document.getElementsByClassName("mySlides1");
var x2 = document.getElementsByClassName("mySlides2");
var x3 = document.getElementsByClassName("mySlides3");
var x4 = document.getElementsByClassName("mySlides4");
var x6 = document.getElementsByClassName("mySlides5");

const appearElements = document.querySelectorAll('.appear');

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;

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

    if (n > x6.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x6.length}
    for (i = 0; 1 < x6.length; i++){
        x6[i].style.display = "none";
    }
    x6[slideIndex-1].style.display = "block";
}

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

    window.addEventListener('scroll', appearOnScroll);
    window.addEventListener('resize', appearOnScroll);
    appearOnScroll();
});

// =============================== FUNCTION TURN.JS FLIPBOOK =============================== //

function canToggleFullscreen() {
    return !!(document.fullscreenEnabled || document.webkitFullscreenEnabled || document.msFullscreenEnabled);
}
/** return true if fullScreenElement exists, indicating the document is in full screen mode. */
function isFullscreen() {
    return !!(document.fullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement);
}

function getStatusFS() {
    return document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement;
}

function isFullscreenEnable(elem) {
    return getStatusFS() === elem;
}

/** If the browser is capable, requests to be in full screen mode. */
function enterFullscreen() {
    // var page = document.documentElement
    const fullScreenFn = elem.requestFullscreen || elem.webkitRequestFullscreen || elem.msRequestFullscreen;
    if (fullScreenFn) {
        fullScreenFn.apply(elem);
    }
}

/** If the browser is capable, exits full screen mode */
function exitFullscreen() {
    const exitFullScreenFn = document.exitFullScreen || document.webkitExitFullscreen || document.msExitFullscreen;
    if (exitFullScreenFn) {
        exitFullScreenFn.apply(document);
    }
}

function print() {
    let objFra = document.getElementById('myFrame');
    objFra.contentWindow.focus();
    objFra.contentWindow.print();
}
    document.getElementById('downloadButton').addEventListener('click', function() {
    document.getElementById('downloadLink').click();
});
function prevFlip(){
    $('#flipbook').turn('previous');
};
function nextFlip(){
    $('#flipbook').turn('next');
};
$(window).bind('keydown', function(e){
    if (e.keyCode==37)
        $('#flipbook').turn('previous');
    else if (e.keyCode==39)
        $('#flipbook').turn('next');
});

// =============================== eND fUNCTION tURN.jS fLIPBOOK =============================== //

//  ============================== Function Send Email ============================== //

function sendCompro() {
    var sendTo = "info@nia.co.id";
    var subject= "Quotation Company Profile";
    const body = `Hello NIA! \n\n I want to ask quotation about website design and development for company profile.\n\n Thank you NIA`;
    // Construct the mailto link
    var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

    window.open(mailtoLink, '_blank');
}
function sendPromo() {
    var sendTo = "info@nia.co.id";
    var subject= "Quotation Promotial Video";
    const body = `Hello NIA! \n\n I want to ask quotation about promotial video for my company or business.\n\n Thank you NIA`;
    // Construct the mailto link
    var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

    window.open(mailtoLink, '_blank');
}
function sendEvent() {
    var sendTo = "info@nia.co.id";
    var subject= "Quotation Event Filming";
    const body = `Hello NIA! \n\n I want to ask quotation about documentation film for my event.\n\n Thank you NIA`;
    // Construct the mailto link
    var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

    window.open(mailtoLink, '_blank');
}
function sendSocial() {
    var sendTo = "info@nia.co.id";
    var subject= "Quotation Social Media Handling";
    const body = `Hello NIA! \n\n I want to ask quotation about Social Media Content for branding my business.\n\n Thank you NIA`;
    // Construct the mailto link
    var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

    window.open(mailtoLink, '_blank');
}
function sendMedia() {
    var sendTo = "info@nia.co.id";
    var subject= "Quotation Media News Website";
    const body = `Hello NIA! \n\n I want to ask quotation about media news website design and development.\n\n Thank you NIA`;
    // Construct the mailto link
    var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

    window.open(mailtoLink, '_blank');
}

function sendEcommerce() {
    var sendTo = "info@nia.co.id";
    var subject= "Quotation Ecommerce Website";
    const body = `Hello NIA! \n\n I want to ask quotation about eCommerce website design and development.\n\n Thank you NIA`;
    // Construct the mailto link
    var mailtoLink = 'mailto:'+sendTo+'?subject='+subject+'&body='+body;

    window.open(mailtoLink, '_blank');
}

// End Function Send Email //
