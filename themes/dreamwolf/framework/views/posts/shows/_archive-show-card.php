<?php

$status = esc_attr( wolf_get_show_status() );
$link = get_the_permalink();
$title = get_the_title();
$synopsis = get_the_excerpt();

if ( wolf_show_is_playing()  ){
	$status_txt = 'now playing';
}

if ( wolf_show_is_rehearsing() ){
	$status_txt = 'in rehearsal';
}

?>

<div id="show-<?php the_id(); ?>" <?php post_class( "pg-post-item -$status _before"); ?>>

		<!-- Show Header -->
		<div class="post-header">

			<!-- Show Status -->
            <?php if( wolf_show_is_playing() || wolf_show_is_rehearsing() ){ ?>

                <div class="show-status -<?php echo esc_attr( wolf_get_show_status() ); ?>">
                    <p class="_white _mbn"><?php esc_html_e( $status_txt ); ?></p>
                </div>

            <?php } ?>

			<!-- Show Title -->
			<a class="title-link" href="<?php echo esc_url( $link ); ?>">
	            <h1 class="h1 title -grunge _mbn"><?php esc_html_e( $title ); ?></h1>
            </a>

			<!-- Show Author -->
            <h5 class="author _gray"><?php echo wolf_get_show_author(); ?></h5>

			<!-- Show Date Module -->
			<?= wolf_get_show_date_module( 'fa-calendar', '-archive _gray' ); ?>

		</div>

		<!-- Show Featured Image-->
		<a class="featured-wrapper _before" href="<?php echo esc_url( $link ); ?>" ?>
            <img class="featured-wrapper__img" src="<?= wolf_get_featured_image(); ?>" alt="<?= wolf_get_featured_alt(); ?>" width="920" height="400">
		</a>

		<!-- Show Content -->
		<div class="post-content">

			<!-- Show Synopsis -->
			<p class="synopsis _gray">
                <?php esc_html_e( $synopsis ); ?>
            </p>

			<!-- Show Info -->
			<?php wolf_get_post_view( 'shows', '_archive-more-info' ); ?>

		</div>

		<!-- Show Footer -->
		<div class="post-footer">
		</div>

</div>