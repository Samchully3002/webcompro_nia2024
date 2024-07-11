    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z49W0Z4LVG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Z49W0Z4LVG');
    </script>

    <meta charset="utf-8">
     <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=2, minimum-scale=1, width=device-width" />
    <title>Networks Indonesia Aku</title>
    <link rel="shortcut icon" href="{{asset('frontend/images/icon/favicon.ico')}}">
    <!-- {{asset('frontend/css/outline.css')}} -->
    <link rel="stylesheet" href="{{asset('frontend/css/default.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/outline.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){
            let url = $(location).attr('href');
            const visited = url.substring(url.lastIndexOf('/') + 1);
            $.getJSON("https://ipinfo.io",
            function (response) {
                let ip = response.ip;
                $("#visited").val(visited);
                $("#ip").val(ip);

                let form = $('#form_visitor')[0];
                let data = new FormData(form);
                    $.ajax({
                        url: "{{route('visitor.record') }}",
                        type: "POST",
                        data: data,
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            // console.log('success record data');
                        },
                        error: function() {
                            // console.log('error record data');
                        }
                    });
            }, "jsonp");
          });

          function changeFontFamily() {
            var currentLang = $current_locale;
            console.log(currentLang);
            var selectedLanguage = selectElement.value;
            var bodyElement = document.body;

            switch (currentLang) {
                case 'kr':
                    bodyElement.classList.add('krLang');
                    break;
                case 'id':
                    bodyElement.classList.add('localLang');
                    break;
                    case 'en':
                    bodyElement.classList.add('localLang');
                    break;
                // Add cases for other languages
            default:
                bodyElement.classList.add('localLang'); // Default to English
                break;
            }
          }
        document.getElementById('choseLang').addEventListener('change', changeFontFamily);
        // changeFontFamily();

    </script>



