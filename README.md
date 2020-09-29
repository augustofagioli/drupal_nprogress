NPROGRESS for Drupal
NPROGRESS (1) is  nanoscopic progress bar. Featuring realistic trickle animations to convince your users that something is happening

This project is meant as temporary  developement module is for Drupal 8.x, waiting for the appropriate release at https://www.drupal.org/project/nprogress



Log:

Sept2020 > A very first  basic working release for Drupal 8


Install:
********


. composer require drupal/nprogress
. drush en nprogress
. add "style='display: none'"  to BODY in your* html.html.twig
. paste  this code in your* html.html.twig, right before </body>

<code>
 <script>
    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
    $("#b-0").click(function() { NProgress.start(); });
    $("#b-40").click(function() { NProgress.set(0.4); });
    $("#b-inc").click(function() { NProgress.inc(); });
    $("#b-100").click(function() { NProgress.done(); });
  </script>
</code>




TODO:
*****

. Complete automated install (no handwork)
. Implement configuration page


This module is brought to you by fagioli.biz (2)
NPROGRESS is originally developed by Ricosta Cruz . (3)


(1) https://ricostacruz.com/nprogress/
(2) https://fagioli.biz
(3) https://ricostacruz.com
