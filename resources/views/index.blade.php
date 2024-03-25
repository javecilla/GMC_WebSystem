<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ env('APP_NAME') }}</title>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta http-equiv="Content-type" content="text/html" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="robots" content="index, follow"/>
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	<meta name="description" content="Golden Minds Bulacan is the private school that offers free education, produce graduates that are competitive in the current global trends." />
	<meta name="abstract" content="Official Internet Website of Golden Minds Bulacan"  />
  <meta name="copyright" content="Golden Minds Bulacan"  />
  <meta name='Classification' content='Education'/>
  <meta name='identifier-URL' content='{{ url()->current() }}'/>
  <meta name="msapplication-TileImage" content="{{ asset('/as2l1f.png') }}" />
  <!--<meta author='Jerome Avecilla' content='Developer: https://javecilla.vercel.app'/>-->
  <!--The SEO Framework by Jerome Avecilla -->
  <meta property="article:author" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="article:publisher" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="og:image" content="{{ asset('/51sz2og.png') }}" />
  <meta property="og:image:width" content="608">
  <meta property="og:image:height" content="260">
  <meta property="og:image:alt" content="{{ env('APP_NAME') }}" />
  <meta property="og:image:secure_url" content="{{ asset('/as2l1f.png') }}"/>
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title"content="{{ env('APP_NAME') }}" />
 	<meta property="og:description" content="Golden Minds Bulacan is the private school that offers free education, produce graduates that are competitive in the current global trends." />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
  <meta property="article:author" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="article:publisher" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="fb:pages" content="100924508936440"/>
  <meta property="fb:app_id" content="100924508936440"/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:site" content="https://twitter.com/goldenminds"/>
  <meta name="twitter:creator" content="https://twitter.com/goldenminds"/>
  <meta name="twitter:title" content="{{ env('APP_NAME') }}"/>
	<meta name="twitter:description" content="Golden Minds Bulacan is the private school that offers free education, produce graduates that are competitive in the current global trends."/>

	{{-- Link Site Information --}}
  <link rel='shortlink' href="https://goldenmindsbulacan.com/" />
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/as2l1f.png') }}" />
	<link rel="apple-touch-icon" type="image/png" sizes="16x16"  href="{{ asset('/as2l1f.png') }}" />
	<link rel="alternate" type="text/xml+oembed" href="https://goldenmindsbulacan.com/sitemap.xml?url=https://goldenmindsbulacan.com/&format=xml" />
	<link rel="alternate" type="application/rss+xml" title="Golden Minds Bulacan | News - Golden Minds Colleges is the private school that offers free education, produce graduates that are competitive in the current global trends." href="https://goldenmindsbulacan.com/news" />
  <link rel="alternate" type="application/rss+xml" title="Golden Minds Bulacan Online Application | Enrollment - GMC Senior High School effectively equips students with above level skills. Seize your future! Enroll now at GMC Senior High. Dream big, aim higher. New students and transferees are welcome at all levels. Your journey starts here!" href="https://admission.goldenmindsbulacan.com/" />
	<link rel="canonical" href="https://admission.goldenmindsbulacan.com/" />

	{{-- Fonts links --}}
	<link rel='dns-prefetch' href='https://fonts.googleapis.com' />
  <link rel='dns-prefetch' href='https://fonts.gstatic.com' />
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>

	{{-- Production scripts --}}
  @production
  {{-- Recaptcha --}}
  <script src="https://www.google.com/recaptcha/api.js?render=6LexnxcoAAAAAKDTPYJnkgbdO8FYY8ccBysWwSYX"></script>

  {{-- Google tag (gtag.js) old--}}
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CH1S28LJ16"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CH1S28LJ16');
  </script>

  {{-- Google tag (gtag.js) new--}}
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5DTYNXH8FS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5DTYNXH8FS');
  </script>

  {{-- Google Tag Manager --}}
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MQ29RVWK');</script>
  @endproduction

  <link rel="stylesheet" href="https://plugins.goldenmindsbulacan.com/fontawesome/css/all.min.css"/>
  <script src="https://plugins.goldenmindsbulacan.com/fontawesome/js/all.min.js"></script>
	@vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body id="app">
	@production
	{{-- Google Tag Manager (noscript) --}}
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ29RVWK"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

  {{-- Messenger Chat Plugin Code --}}
  <div id="fb-root"></div>
  <div id="fb-customer-chat" class="fb-customerchat"></div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "100924508936440");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  {{-- SDK code --}}
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v17.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
	@endproduction

	<app-layout></app-layout>


</body>
</html>