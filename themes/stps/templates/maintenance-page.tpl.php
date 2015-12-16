<?php
/**
 * @file
 * Returns the HTML for a simple front placeholder page.
 */
?>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="http://momsteaminstitute.org/sites/momsteaminstitute.org/themes/mti/css/styles.css" media="all" />
  </head>
  <body class="maintenance">

    <div id="page">
      <p>&nbsp;</p>
      <header class="header" id="header" role="banner">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
        <?php endif; ?>

        <?php
          if (!$site_name) {
            $site_name = 'MomsTEAM Institute';
          }
          if (!$site_slogan) {
            $site_slogan = '(Coming Soon)';
          }
        ?>
        <?php if ($site_name || $site_slogan): ?>
          <div class="header__name-and-slogan" id="name-and-slogan">
            <?php if ($site_name): ?>
              <h1 class="header__site-name" id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </header>

      <div id="main">
        <div id="content" class="column clearfix" role="main"></div>
          <a href="http://www.momsteam.com"><img src="/sites/momsteaminstitute.org/files/momsteam_logo.png" />
            Visit MomsTEAM - the most trusted resource for sports parents</a>
        <div id="navigation"></div>
      </div>
    </div>
  </body>
</html>