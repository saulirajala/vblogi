<article @php(post_class('archive-post'))>
    <div class="content-container">
        <header>
            <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
            @include('partials/entry-meta')
        </header>
        <div class="entry-summary">
            @php(the_excerpt())
        </div>
    </div>

    <div class="image-container">
        <div class="svg__container">
            <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="svg__self">
                <polygon class="svg_self--odd" points="100,0 0,0 0,300"/>
                <polygon class="svg_self--even" points="300,0 280,0 200,300 300,300"/>
            </svg>
        </div>
		<?php echo get_the_post_thumbnail( get_the_ID(), 'post-thumbnail' ); ?>
    </div>
</article>
