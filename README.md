NPROGRESS for Drupal
NPROGRESS (1) is  nanoscopic progress bar. Featuring realistic trickle animations to convince your users that something is happening

This project is meant as temporary  developement module is for Drupal 8.x, waiting for the appropriate release at https://www.drupal.org/project/nprogress


Log:
Sept2020 > A very first  basic working release for Drupal 8


Install:
********

. composer require drupal/nprogress
. drush en nprogress
. enable module at /admin/config/nprogress/settings
. add "style='display: none'"  to BODY in your* html.html.twig
. paste  this code in your* html.html.twig, right before </body>



TODO:
*****

. Complete automated install (no handwork)

This module is brought to you by fagioli.biz (2)
NPROGRESS is originally developed by Ricosta Cruz . (3)

(1) https://ricostacruz.com/nprogress/
(2) https://fagioli.biz
(3) https://ricostacruz.com
