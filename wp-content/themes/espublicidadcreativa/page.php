<?php get_header() ?>

	<body>

    <?php while (have_posts()): the_post(); ?>

		  <!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">








					<span class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="" /></span>
					<h1>Stellar</h1>
					<?php the_content() ?>
					built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a>.</p>
        </header>

				<!-- Menu -->

				<?php
          $menu_name = 'header-menu'; //menu slug
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
          $menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
        ?>

        <nav id="nav">
					<ul>
            <?php foreach ($menu_items as $index): ?>
              <li><a href="<?php echo $index->url ?>"><?php echo $index->title ?></a></li>
            <?php endforeach; ?>
					</ul>
				</nav>

				<!-- Main -->
				<div id="main">
          <?php
            $query = get_posts(
                      array(
                          'name'      => 'inicio',
                          'post_type' => 'page'
                      )
                    );
          ?>
					<!-- Introduction -->
					<section id="intro" class="main">
            <?php foreach ($query as $index): ?>
              <div class="spotlight">
  							<div class="content">
  								<header class="major">
  									<h2><?php echo $index->post_title; ?></h2>
  								</header>
  								<p>

                      <?php echo $index->post_content; ?>

                  </p>
  							</div>
  							<span class="image"><img src="<?php echo get_the_post_thumbnail_url( $index->ID, 'thumbnail' ); ?>" alt="" /></span>
  						</div>
            <?php endforeach; ?>
					</section>

					<section id="first" class="main special">

						<header class="major">
							<h2>Magna veroeros</h2>
						</header>
						<ul class="features">
							<li>
								<span class="icon major <?php echo trim(get_field('icono1')) ?>" style="color:rgb(163, 138, 29)"></span>
								<h3><?php echo get_field('titulo1') ?></h3>
								<p><?php echo get_field('texto1') ?></p>
							</li>
							<li>
								<span class="icon major style3 <?php echo trim(get_field('icono2')) ?>"></span>
                <h3><?php echo get_field('titulo2') ?></h3>
								<p><?php echo get_field('texto2') ?></p>
							</li>
							<li>
								<span class="icon major style5 <?php echo trim(get_field('icono3')) ?>"></span>
                <h3><?php echo get_field('titulo3') ?></h3>
								<p><?php echo get_field('texto3') ?></p>
							</li>
						</ul>
						<footer class="major">
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn More</a></li>
							</ul>
						</footer>
					</section>

					<!-- Second Section -->
					<section id="second" class="main special">
						<header class="major">
							<h2>Ipsum consequat</h2>
							<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
							posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
						</header>
						<ul class="statistics">
							<li class="style1">
								<span class="icon fa-code-fork"></span>
								<strong>5,120</strong> Etiam
							</li>
							<li class="style2">
								<span class="icon fa-folder-open-o"></span>
								<strong>8,192</strong> Magna
							</li>
							<li class="style3">
								<span class="icon fa-signal"></span>
								<strong>2,048</strong> Tempus
							</li>
							<li class="style4">
								<span class="icon fa-laptop"></span>
								<strong>4,096</strong> Aliquam
							</li>
							<li class="style5">
								<span class="icon fa-diamond"></span>
								<strong>1,024</strong> Nullam
							</li>
						</ul>
						<p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
						<footer class="major">
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn More</a></li>
							</ul>
						</footer>
					</section>

					<!-- Get Started -->
					<section id="cta" class="main special">
						<header class="major">
							<h2>Congue imperdiet</h2>
							<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
							posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
						</header>
						<footer class="major">
							<ul class="actions">
								<li><a href="generic.html" class="button special">Get Started</a></li>
								<li><a href="generic.html" class="button">Learn More</a></li>
							</ul>
						</footer>
					</section>
				</div>
  <?php endwhile; ?>
<?php get_footer() ?>
