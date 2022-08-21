<!DOCTYPE html>
<html style="font-size: 20px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Контрагенты</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Контрагенты.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js"></script>
    <script class="u-script" type="text/javascript" src="nicepage.js"></script>
    <meta name="generator" content="Nicepage 4.16.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic">



    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#539092">
    <meta property="og:title" content="Контрагенты">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="ru"><header class="u-clearfix u-header u-palette-1-base u-sticky u-sticky-ef60 u-header" id="sec-4a8c" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Главная.html" data-page-id="35424405" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40" title="Главная">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-1-light-2 u-text-white" href="Главная.html" style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-1-light-2 u-text-white" href="Контрагенты.php" style="padding: 10px 20px;">Контрагенты</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-light-2 u-text-hover-palette-1-light-2 u-text-white" href="Карта.html" style="padding: 10px 20px;">Карта</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Контрагенты.php">Контрагенты</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Карта.html">Карта</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div><style class="u-sticky-style" data-style-id="ef60">.u-sticky-fixed.u-sticky-ef60:before, .u-body.u-sticky-fixed .u-sticky-ef60:before {
borders: top right bottom left !important
}</style></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-8d79">
      <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <h3>Добавление контрагента</h3>
          <form action="create.php" method="post">
            <p>Имя:
              <input type="text" name="name" /></p>
            <p>Фамилия:
              <input type="text" name="surname" /></p>
            <p>Отчество:
              <input type="text" name="patronymic" /></p>
            <p>ИИН:
              <input type="text" name="iin" /></p>
            <p>Номер паспорта:
              <input type="text" name="passportNumber" /></p>
            <p>Дата выдачи:
              <input type="date" name="dateofissue" /></p>
            <p>Выдан:
              <input type="text" name="issuedby" /></p>
            <p>Выдан:
              <input type="checkbox" name="checkbox_name" value="checkox_value">
              <?php
              if(filter_has_var(INPUT_POST,'entity')) {
              echo '<p>Выдан:
    <input type="text" name="issuedby" /></p>';
}
               ?>

          <input type="submit" value="Добавить">
          </form>
</div>
</div>
</section>

</body></html>
