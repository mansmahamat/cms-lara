<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dark-mode-switch.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dark-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <script type="text/javascript" src="https://cookiegenerator.eu/cookie.js?position=&amp;skin=cookielaw3&amp;box_radius=22&amp;animation=shake&amp;delay=2&amp;bg_color=ffffff&amp;msg_color=dc3545&amp;msg=%0A%22Nous%20utilisons%20les%20cookies%20afin%20de%20fournir%20les%20services%20et%20fonctionnalit%C3%A9s%20propos%C3%A9s%20sur%20notre%20site%20et%20afin%20d%E2%80%99am%C3%A9liorer%20l%E2%80%99exp%C3%A9rience%20de%20nos%20utilisateurs.%20Les%20cookies%20sont%20des%20donn%C3%A9es%20qui%20sont%20t%C3%A9l%C3%A9charg%C3%A9s%20ou%20stock%C3%A9s%20sur%20votre%20ordinateur%20ou%20sur%20tout%20autre%20appareil.%22%20%5Burl%3Dhttps%3A%2F%2Fcookiegenerator.eu%2Ftos%5DPlus%20d'info%5B%2Furl%5D.&amp;link_color=dc3545&amp;accept_text=Accepter&amp;accept_background=dc3545&amp;accept_color=fffff&amp;accept_radius=0"></script>
</head>
<body>
    @include('includes.navbar')
    <div class="container mt-4">
        @include('includes.message')
        @yield('content')
    </div>

    
   




    @include('includes.footer')
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                                .create( document.querySelector( '#article-ckeditor' ) , {
                                    
       
        cloudServices: {
            tokenUrl: 'https://72746.cke-cs.com/token/dev/4A4RfXDzTjshjNFljPiC394g23A57qDwUdXo9iyJfD3WumoQC3YHIbX0vIgB',
            uploadUrl: 'https://72746.cke-cs.com/easyimage/upload/'
        }
    })
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
    </script>
   
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>
