
 <?php ob_start(); ?>

<style>
 .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
    (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

$(function(){

  $('#new-review').autosize({append: "\n"});

  var reviewBox = $('#post-review-box');
  var newReview = $('#new-review');
  var openReviewBtn = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField = $('#ratings-hidden');

  openReviewBtn.click(function(e)
  {
    reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
  });

  closeReviewBtn.click(function(e)
  {
    e.preventDefault();
    reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
    closeReviewBtn.hide();
    
  });

  $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
  });
});
</script>



<div class="container">
	<div class="row" style="margin-top:0px;paddig-left:323px!important;">
		<div class="col-md-6">
    	<div class="well well-sm">
            <div class="text-right">
                <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
            </div>
        
            <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                    <form accept-charset="UTF-8" action="ratingreview.php" method="post">
                        <input id="ratings-hidden" name="rating" type="hidden"> 
                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
        
                        <div class="text-right">
                            <div class="stars starrr" data-rating="0"></div>
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-lg" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
         
		</div>
	</div>
</div>


<!-- Code for database connectivity -->

<?php
$items_menu = [
    'item1' => 'Pizza',
    'item2' => 'Spring rolls',
    'item3' => 'Chinese Noodles Bowl',
    'item4' => 'Beef Noodles',
    'item5' => 'Chicken Scapello',
    'item6' => 'Caprese Chicken',
    'item7' => 'Burger',
    'item8' => 'Butter Chicken',
    'item9' => 'TTeokbokki Korean Street Food',
    'item10' => 'Kimchi',
];

$items_id = [
  'item1' => 1,
  'item2' => 2,
  'item3' => 3,
  'item4' => 4,
  'item5' => 5,
  'item6' => 6,
  'item7' => 7,
  'item8' => 8,
  'item9' => 9,
  'item10' => 10,
];
?>


<?php

$servername = "database-1.ckswgwtyfetx.us-west-2.rds.amazonaws.com";
$username = "root";
$password = "chitty1411";
$dbname="marketplace";


$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {                 
  die('could not connect: ' . mysql_error()); 
 } 
 
 mysqli_select_db($conn,$dbname);

 if(isset($_SERVER['HTTP_REFERER'])) {
  $pname=  basename($_SERVER['HTTP_REFERER']);
  //echo $pname;
  $item=explode(".",$pname)[0];        
}else{
   $page= basename($_SERVER['PHP_SELF']);
if($page!="")   
if(!isset($item))
{       
    $item=explode(".",$page)[0];
}
}



//echo $item;
// echo 'printing in_array value:';
// echo array_key_exists($item, $items_id);
if(array_key_exists($item, $items_id)){
$prodid = $items_id[$item];
 $productname = $items_menu[$item];



//echo 'printing prod names';
echo '<br/>';
 //echo $prodid;
//echo $productname;

if(isset($_COOKIE['userid'])){
	$userid=$_COOKIE['userid'];
	if($userid){


    #echo $userid;

    $marketresult = $conn->query("SELECT * FROM marketplace.products where productname = '$productname' and userid=$userid and prodid=$prodid;");
       
    if ($marketresult->num_rows > 0) {
        $marketprod=$marketresult -> fetch_assoc();
        $hits = $marketprod["hits"] + 1;  
    }
    else{
        $hits=1;
    }
  
   //$conn->close();
   
    //echo $productname;
    $rating = $review = "";   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {              
        $review = clean($_POST["comment"]);    
    }
    if (empty($_POST["rating"])) {
        $rating = "";
      } else {
        $rating = clean($_POST["rating"]);
    }

    if($review != '' && isset($userid)&& isset($prodid)) {	
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
      }
      
    if ($marketresult->num_rows > 0) {
         $sql="UPDATE marketplace.products set review='$review',hits=$hits,rating=$rating  where prodid=$prodid and type='lightmore' and userid=$userid and productname='$productname'; ";
       }else{
        echo "again why";
       $sql = "INSERT INTO marketplace.products(prodid,type,rating,review,userid,productname,hits) VALUES($prodid,'lightmore',$rating,'$review',$userid,'$productname',$hits)";
       }
 


        //$sql = "INSERT INTO marketplace.products (prodid, type, rating, review, userid, productname, hits) VALUES($prodid,'lightmore',$rating,'$review',$userid,'$productname',$hits)";
      
      //$result = $conn->query($sql);

      echo "New record created successfully";
      if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       header("Location: $item.php");
       exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
   
  }
  else{
    header("Location: ratingerror.php");
     //echo "Guest cannot rate the product. Login to rate the product";
     //echo "<html><head><title>This page</title></head><body><br/><a href='./Menu_list.html'>Go back to item menu</a></html></body>";
  }

	$conn -> close();
}}
  function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    #$conn->close();

  
?>
