    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z49W0Z4LVG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());


        gtag('config', 'G-Z49W0Z4LVG', {
            'cookie_domain': 'auto'  // Ensures it uses the appropriate domain
        });
    </script> -->
    <title>{{ $meta->title ? $meta->title : 'Networks Indonesia Aku' }}</title>
    <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=2, minimum-scale=1, width=device-width" />
    <meta charset="utf-8">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">

    <meta name="description" content="{{ $meta->desc ? $meta->desc : '' }}"></meta>
    <meta name="keywords" content="{{ $meta->keyword ? $meta->keyword : '' }}"></meta>
    <!-- <meta name="google-site-verification" content="3qoJgp8b08_UcEGyt5AuOh2HfQJl1J-_XdhLz_cDstg" /> -->
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
            let locLang = "{{Request::session()->get('locale');}}"
            if(locLang === 'kr'){
                document.getElementsByTagName("body")[0].style.fontFamily = 'Pretendard';
            //   alert('korea');
        }

            // let url = $(location).attr('href');
            // const visited = url.substring(url.lastIndexOf('/') + 1);
            // $.getJSON("https://ipinfo.io",
            // function (response) {
            //     let ip = response.ip;
            //     $("#visited").val(visited);
            //     $("#ip").val(ip);

            //     let form = $('#form_visitor')[0];
            //     let data = new FormData(form);
            //         $.ajax({
            //             url: "{{route('visitor.record') }}",
            //             type: "POST",
            //             data: data,
            //             dataType: "JSON",
            //             processData: false,
            //             contentType: false,
            //             success: function(response) {
            //                 console.log('success record data');
            //             },
            //             error: function() {
            //                 // console.log('error record data');
            //             }
            //         });
            // }, "jsonp");
          });
    </script>
    <!-- <script type="application/ld+json">
    {

      "@context": "https://schema.org",

      "@type": "WebSite",

      "url": "https://www.nia.co.id/",

      "potentialAction": {

      "@type": "SearchAction",

      "target": "https://query.nia.co.id/search?q={search_term_string}",

      "query-input": "required name=search_term_string"

     }

   }

</script> -->




