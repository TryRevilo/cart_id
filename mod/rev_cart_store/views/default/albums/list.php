<style type="text/css">
  .btn-nav-cour {
    color: #FFF;
    background-color: #005f5f;
    border: none;
  }
  /* override position and transform in 3.3.x */
  .carousel-inner .item.left.active {
   transform: translateX(-33%);
 }
 .carousel-inner .item.right.active {
   transform: translateX(33%);
 }
 .carousel-inner .item.next {
   transform: translateX(33%)
 }
 .carousel-inner .item.prev {
   transform: translateX(-33%)
 }
 .carousel-inner .item.right,
 .carousel-inner .item.left { 
   transform: translateX(0);
 }
 .carousel-control.left,.carousel-control.right {background-image:none;}
 .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
 .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
 .MultiCarousel .MultiCarousel-inner .item { padding-right: 4px; float: left;}
 .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:0%;top:calc(50% - 20px); }
 .MultiCarousel .leftLst { left:0; }
 .MultiCarousel .rightLst { right:0; }
 .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
 .row {
   margin-right: auto;
   margin-left: auto;
 }
 .elgg-list > li {
   border-bottom: none;
 }
 .footer-copyright {
  font-size: 90%;
  color: #737368;
}
</style>
<?php
$images = elgg_extract('entities', $vars, FALSE);

$item_images = elgg_view_entity_list($images, [
 'item_view' => 'albums/item_view',
 'no_results' => 'No items to show',
 ]);
 ?>
 <div class="row">
   <div class="col-xs-12 col-md-12">
    <div class="file-full-view-frame"><?= $default_picture; ?></div>
    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
     <div class="MultiCarousel-inner">
      <?= $item_images; ?>
    </div>
    <button class="btn btn-primary-outline btn-nav-cour leftLst"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></button>
    <button class="btn btn-primary-outline btn-nav-cour rightLst"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
  </div>
</div>
</div>
<div class="row">
 <div class="col-md-12 text-center">
  <hr/>
  <div class="footer-copyright">Copyright © <?= date("Y"); ?></div>
</div>
</div>

<script type="text/javascript">

 $(document).ready(function () {
  var itemsMainDiv = ('.MultiCarousel');
  var itemsDiv = ('.MultiCarousel-inner');
  var itemWidth = "";

  $('.leftLst, .rightLst').click(function () {
    var condition = $(this).hasClass("leftLst");
    if (condition)
      click(0, this);
    else
      click(1, this)
  });

  ResCarouselSize();

  $(window).resize(function () {
    ResCarouselSize();
  });

        //this function define the size of the items
        function ResCarouselSize() {
          var incno = 0;
          var dataItems = ("data-items");
          var itemClass = ('.item');
          var id = 0;
          var btnParentSb = '';
          var itemsSplit = '';
          var sampwidth = $(itemsMainDiv).width();
          var bodyWidth = $('body').width();
          $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);

            if (bodyWidth >= 1200) {
              incno = itemsSplit[3];
              itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
              incno = itemsSplit[2];
              itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
              incno = itemsSplit[1];
              itemWidth = sampwidth / incno;
            }
            else {
              incno = itemsSplit[0];
              itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
              $(this).outerWidth(itemWidth);
            });

          });
        }

        //this function used to move the items
        function ResCarousel(e, el, s) {
          var leftBtn = ('.leftLst');
          var rightBtn = ('.rightLst');
          var translateXval = '';
          var divStyle = $(el + ' ' + itemsDiv).css('transform');
          var values = divStyle.match(/-?[\d\.]+/g);
          var xds = Math.abs(values[4]);
          if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
              translateXval = 0;
              $(el + ' ' + leftBtn).addClass("over");
            }
          }
          else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
              translateXval = itemsCondition;
              $(el + ' ' + rightBtn).addClass("over");
            }
          }
          $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
          var Parent = "#" + $(ee).parent().attr("id");
          var slide = $(Parent).attr("data-slide");
          ResCarousel(ell, Parent, slide);
        }

      });


    </script>