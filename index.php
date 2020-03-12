<?php
//under 70
$pgTitle = 'Web Design Services | Content Marketing | Your Best Business Partner';
//under 160
$pgDescription = 'Tim Web Design Services is for anyone want to expanding market opportunity with using Website Content Marketing and becoming your Best Business Partner';
?>
<?php include("header.php"); ?>
<div class="container-fluid picWall">
  <div class="row no-gutter">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="lazy img-responsive" data-alt-src="images/tim-web-design-services-college-style-l.jpg" src="images/tim-web-design-services-college-style-s.jpg">
      <div class="overlay">
        <div class="text">
          <a href="#"><p>College Style</p></a>
          <h2>Poster Design</h2>        
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="lazy img-responsive" data-alt-src="images/tim-web-design-services-3d-works-l.png" src="images/tim-web-design-services-3d-works-s.png">
      <div class="overlay">
        <div class="text">
          <a href="#"><p>Phone Design</p></a>
          <h2>3D Works</h2>        
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="lazy img-responsive" data-alt-src="images/tim-web-design-services-sheet-metal-l.jpg" src="images/tim-web-design-services-sheet-metal-s.jpg">
      <div class="overlay">
        <div class="text">
          <a href="#"><p>Poster design</p></a>
          <h2>sheet metal poster design</h2>        
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="lazy img-responsive" data-alt-src="images/tim-web-design-services-stay-summer-l.jpg" src="images/tim-web-design-services-stay-summer-s.jpg">
      <div class="overlay">
        <div class="text">
          <a href="#"><p>Summer Time</p></a>
          <h2>Photo Manipulation</h2>        
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <p>Tim Web Design Services is for anyone want to expanding market opportunity with using Website Content Marketing and becoming your Best Business Partner</p> -->
<script>
$(function() {
    var preloads = [
    'images/tim-web-design-services-college-style-l.jpg',
    'images/tim-web-design-services-3d-works-l.png',
    'images/tim-web-design-services-sheet-metal-l.jpg',
    'images/tim-web-design-services-stay-summer-l.jpg'
    ];

    $(preloads).each(function(){
    $('<img/>')[0].src = this;
    });
  // var sourceSwap = function () {
  //     var $this = $(this);
  //     var newSource = $this.data('alt-src');
  //     $this.data('alt-src', $this.attr('src'));
  //     $this.attr('src', newSource);
  //     $this.next().show();
  // }
  // var sourceSwapOut = function () {
  //     var $this = $(this);
  //     var newSource = $this.data('alt-src');
  //     $this.data('alt-src', $this.attr('src'));
  //     $this.attr('src', newSource);
  // }
    // $('img[data-alt-src]').each(function() { 
    //     new Image().src = $(this).data('alt-src');
    // }).hover(sourceSwap, sourceSwapOut); 
    $('.no-gutter>div').mouseover(function () {
      new Image().src = $(this).children('img[data-alt-src]').data('alt-src');
      var newSource = $(this).children('img[data-alt-src]').data('alt-src');
      $(this).children('img[data-alt-src]').data('alt-src', $(this).children('img[data-alt-src]').attr('src'));
      $(this).children('img[data-alt-src]').attr('src', newSource);
      $(this).children('img[data-alt-src]').next().show();
    }).mouseout(function () {
      var newSource = $(this).children('img[data-alt-src]').data('alt-src');
      $(this).children('img[data-alt-src]').data('alt-src', $(this).children('img[data-alt-src]').attr('src'));
      $(this).children('img[data-alt-src]').attr('src', newSource);
    });
});



</script>
<?php include("footer.php"); ?>


