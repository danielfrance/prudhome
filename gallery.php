<? include 'header.php' ?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


<div class="subpage">
  <div class="title">See Some of Our Exceptional Work</div>
</div>
<div class="gallery-container">


  <div class="gallery-slider">
    <div><img src="/img/1.jpg" /></div>
    <div><img src="/img/2.jpg" /></div>
    <div><img src="/img/3.jpg" /></div>
    <div><img src="/img/4.jpg" /></div>
    <div><img src="/img/5.jpg" /></div>
    <div><img src="/img/6.jpg" /></div>
    <div><img src="/img/7.jpg" /></div>
  </div>


</div>



<script type="text/javascript">
  $(document).ready(function(){
    $('.gallery-slider').slick({
      prevArrow : '<button type="button" class="slick-prev"><img src="/img/left-arrow.png" /></button>',
      nextArrow : '<button type="button" class="slick-next"><img src="/img/right-arrow.png" /></button>'
    });

    $('.gallery-slider .slick-active img').load(function() {
      var height = $(this).height();

      $('.gallery-slider').height(height);
      $('.gallery-container').height(height);

    });

  });

</script>

<? include 'footer.php'; ?>