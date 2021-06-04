<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.include.meta')
    @include('layouts.include.css')
  <title>About - Company Bootstrap Template</title>

  <!-- =======================================================
  * Template Name: Company - v4.3.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('layouts.include.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->

    @include('layouts.include.aboutus')

    <!-- ======= Our Team Section ======= -->

    @include('layouts.include.ourteam')

    <!-- ======= Our Skills Section ======= -->

    @include('layouts.include.ourskills')

    <!-- ======= Our Clients Section ======= -->

    @include('layouts.include.ourclients')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @include('layouts.include.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('layouts.include.js')
</body>

</html>
