<?php
$image_url = get_the_post_thumbnail_url( get_the_ID(), 'page-header' );
?>
<div class="jumbotron page-header" style="background-image: url('<?php echo $image_url;?>');">
  {{--<div class="page-header__gradient"></div>--}}
  {{--<h1 class="page-header__title">{!! App\title() !!}</h1>--}}
</div>
