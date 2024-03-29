<head>
<!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2FQZQNVSHH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2FQZQNVSHH');
  </script>  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $titulo;  ?></title>
  <meta content="<?php echo $Seo->meta.' Escrito '.$nombre; ?>" name="description">
  <meta content="<?php echo $Seo->keywords.', '.$titulo; ?>" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="js/like.js" type="text/javascript"></script>
  <script src="js/descargar_libro.js" type="text/javascript"></script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Literatura de terror",
      "name": "<?php echo $titulo; ?>",
      "image": [
      "https://www.juanestebanpelaez.com//jepelaeze/assets/img/autor.jpg"
      ],
      "author": {
        "@type": "Person",
        "name": "<?php echo InterfazGeneral::AUTOR; ?>"
      },
      "datePublished": "2023-01-01",
      "description": "<?php echo $Seo->meta.' Escrito '.$nombre; ?>"
      
    }
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0" nonce="X5Lhj61t"></script>
    </head>