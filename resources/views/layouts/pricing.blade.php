<!DOCTYPE html>
<html lang="en">

<head>

  <title>Blog Single - Company Bootstrap Template</title>
  @include('layouts.include.meta')
  @include('layouts.include.css')

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
          <h2>Pricing</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->

    @include('layouts.include.pricing')


    <!-- ======= Frequently Asked Questions Section ======= -->

    @include('layouts.include.questions')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @include('layouts.include.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.include.js')

</body>

</html>
