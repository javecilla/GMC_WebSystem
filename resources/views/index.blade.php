<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="Content-type" content="text/html" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="robots" content="index, follow"/>
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
  <meta name="description" content="{{ config('app.description') }}" />
  <meta name="abstract" content="Official Internet Website of Golden Minds Colleges"  />
  <meta name="copyright" content="{{ config('app.name') }}"  />
  <meta name='Classification' content='Education'/>
  <meta name='identifier-URL' content='{{ url()->current() }}'/>
  <meta name="msapplication-TileImage" content="{{ asset('/wp-content/uploads/as2l1f.png') }}" />
  <meta name="msapplication-TileColor" content="#b4813f" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="author" content="Jerome Avecilla" />
  <meta property="article:author" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="article:publisher" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="og:image" content="{{ asset('/wp-content/uploads/51sz2og.png') }}" />
  <meta property="og:image:width" content="550"/>
  <meta property="og:image:height" content="225"/>
  <meta property="og:image:alt" content="{{ config('app.name') }}" />
  <meta property="og:image:secure_url" content="{{ asset('/wp-content/uploads/as2l1f.png') }}"/>
  <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}"/>
  <meta property="og:type" content="website"/>
  <meta property="og:title"content="{{ config('app.name') }}" />
  <meta property="og:description" content="{{ config('app.description') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:site_name" content="{{ config('app.name') }}"/>
  <meta property="article:author" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="article:publisher" content="https://www.facebook.com/gmcstamaria2015"/>
  <meta property="fb:pages" content="100924508936440"/>
  <meta property="fb:app_id" content="100924508936440"/>
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:site" content="https://twitter.com/goldenminds"/>
  <meta name="twitter:creator" content="https://twitter.com/goldenminds"/>
  <meta name="twitter:title" content="{{ config('app.name') }}"/>
  <meta name="twitter:description" content="{{ config('app.description') }}"/>
  {{-- Link Site Information --}}
  <link rel='shortlink' href="https://goldenmindsbulacan.com/" />
  <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/wp-content/uploads/gmc-logo.png') }}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/wp-content/uploads/gmc-logo.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/wp-content/uploads/gmc-logo.png') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/wp-content/uploads/gmc-logo.png') }}" />
  <link rel="alternate" type="text/xml+oembed" href="https://goldenmindsbulacan.com/sitemap.xml?url=https://goldenmindsbulacan.com/&format=xml" />
  <link rel="alternate" type="application/rss+xml" title="Golden Minds Colleges | News - Golden Minds Colleges is the private school that offers free education, produce graduates that are competitive in the current global trends." href="https://goldenmindsbulacan.com/news" />
  <link rel="alternate" type="application/rss+xml" title="Experience the comforts of a home-away-from-home at Golden Minds Colleges, a Bulacan-based private institution offering tuition-free education across three campuses in Sta. Maria, Balagtas, and Guiguinto. Our cutting-edge academic programs are driven by a commitment to research and innovation, ensuring a leading-edge educational experience." href="https://goldenmindsbulacan.com/about/information" />
  <link rel="alternate" type="application/rss+xml" title="Golden Minds Colleges Online Application | Enrollment - GMC Senior High School effectively equips students with above level skills. Seize your future! Enroll now at GMC Senior High. Dream big, aim higher. New students and transferees are welcome at all levels. Your journey starts here!" href="https://admission.goldenmindsbulacan.com/" />
  <link rel="canonical" href="https://admission.goldenmindsbulacan.com/" />
  {{-- Fonts links --}}
  <link rel='dns-prefetch' href='https://fonts.googleapis.com' />
  <link rel='dns-prefetch' href='https://fonts.gstatic.com' />
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>

  @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
  {{-- <link rel="stylesheet" href="/public/wp-content/libs/fontawesome/css/all.min.css"/>
  <script src="/public/wp-content/libs/fontawesome/js/all.min.js"></script> --}}

  {{-- Recaptcha --}}
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  @production
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
</head>
<body id="app">
  @production
  {{-- Google Tag Manager (noscript) --}}
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ29RVWK"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  @endproduction
  <app-root></app-root>
  <!-- Last Updated: August 19, 2024
      Developer: https://github.com/javecilla
  -->
</body>
</html>