jQuery(document).ready(function(){jQuery("#site-navigation li").find("ul").hide();jQuery("#site-navigation li").hover(function(){jQuery(this).find("> ul").slideDown("fast")},function(){jQuery(this).find("ul").hide()});jQuery(".menu-toggle").toggle(function(){jQuery("#site-navigation ul.menu").slideDown();jQuery("#site-navigation div.menu").fadeIn()},function(){jQuery("#site-navigation ul.menu").hide();jQuery("#site-navigation div.menu").hide()});jQuery(".showcase").fadeOut("fast");jQuery("article.grid2").fadeOut();jQuery("#home-title").fadeOut();jQuery(".pagination").fadeOut();jQuery("#social-icons a").tooltipster()});jQuery(function(e){e("#showcase").waypoint(function(){e(".showcase").fadeIn(1500)},{offset:"80%",triggerOnce:!0});e("article.grid2").waypoint(function(){e("article.grid2").fadeIn(1500)},{offset:"80%",triggerOnce:!0});e("#home-title").waypoint(function(){e("#home-title").fadeIn(1500)},{offset:"80%",triggerOnce:!0});e(".pagination").waypoint(function(){e(".pagination").fadeIn(1500)},{offset:"90%",triggerOnce:!0})});