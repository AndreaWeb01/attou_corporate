
<!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <!-- bootstrap link -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <link rel="icon" href="{{ url('assets/image/attou-32x32.png') }}" type="image/png">
    <title>Attou Corporate - L'Entreprise aux services des autres</title>
 </head>
 <body>
    <header>
     @include('layout.header')
    </header>

     
    <!-- main -->
    @yield('content')
    <!-- main -->

  <footer>
      @include('layout.footer')
  </footer>

       
      
   <script src="{{ url('assets/js/nav.js') }}"></script>
   <script src="{{ url('assets/js/script.js') }}"></script>
   <!-- Bootstrap Bundle avec Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script>
    // Si l’URL contient "#contact", on scrolle doucement vers cette section
        window.addEventListener('DOMContentLoaded', () => {
            if (window.location.hash === '#contact') {
            const contactSection = document.querySelector('#contact');
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth' });
            }
            }
        });
    </script>

 </body>
 </html>
