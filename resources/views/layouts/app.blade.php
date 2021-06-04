<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.include.meta')
    @include('layouts.include.css')

    <title>Company Bootstrap Template - Index</title>

</head>

<body>

    @include('layouts.include.header')
    @include('layouts.include.herosection')

  <main id="main">

    @include('layouts.include.aboutus')
    @include('layouts.include.service')
    @include('layouts.include.portfolio')
    @include('layouts.include.client')

  </main><!-- End #main -->

    @include('layouts.include.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('layouts.include.js')

</body>

</html>
