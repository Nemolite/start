<?php
the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
the_content(
    sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'start' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        wp_kses_post( get_the_title() )
    )
);