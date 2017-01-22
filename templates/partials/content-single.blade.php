<article @php(post_class())>
    <header>
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        @include('partials/entry-meta')
    </header>
    <div class="entry-content">
        @php(the_content())
    </div>
</article>
@php(comments_template('/templates/partials/comments.blade.php'))
