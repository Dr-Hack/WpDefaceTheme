<?php get_header(); ?>
<div id="main">
<div id="content">
<h1>Hacked</h1>
<body bgcolor=black>

<font size='6' face=' One'style="color: white; text-shadow: 0px 1px 7px red";>Guess w00t? got access? Read the message !</font><br>
<!-- YOUR IMAGE LINK BELOW --- replace the one with yours -->
<center><img src="http://userbar.drhack.net/out.php/i583_wpscan.png"></center>
<p align="center">
<body bgcolor="black">
<!-- Replace the text "  I defaced it" wiht your own text -->
<font size='6' face=' One'style="color: white; text-shadow: 0px 1px 7px aqua";>I defaced it</font><br>
<!-- Add your Group Name in stead of "hackology" -->
<font size='4' face=' One'style="color: green; text-shadow: 0px 1px 7px red";>Hacked by </font><font size='4' face=' One'style="color: green; text-shadow: 0px 1px 7px green";> Hackology </font> <br>
<!-- Add you Deface Page Text in Next Line , you can change it to your Will and wish -->
<font size='4' face=' One'style="color: aqua; text-shadow: 0px 1px 7px aqua";>Your Site is owned because it Sucks or I just wanted to ...</font><br>


<!-- No Text Below -->
</head>

</body>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>