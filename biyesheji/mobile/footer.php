
    <footer>
    	<p><a href="gonsijianjie.php">关于顺南</a>&nbsp;|&nbsp;<a href="shangpinzhanxian.php">产品与服务</a>&nbsp;|&nbsp;<a href="me.php" >联系方式</a></p>
	    <p>Copyright @ 2015 湛江市顺南贸易有限公司 All Rights Reserved</p>
	    <p>粤ICP备05116591号-1</p>
    </footer>
    <script type="text/javascript">
        function scrollNav(){
          var $topAdHeight = 0;
          var scrollHeight = document.body.scrollTop || document.documentElement.scrollTop;
          if (scrollHeight > $topAdHeight){
            $('.navtop').addClass('fixed');
            $('.navtop').css('top',0);
            }
          else{
            $('.navtop').removeClass('fixed');
            }
        }
        scrollNav();
         $(window).scroll(function (){
            scrollNav();
         })
        $(function(){
            $('.nav-search,.slideUp').click(function() {
              $('.navtop-pop').slideToggle();
              $('.opa-lay').toggleClass("fixed");
            });
            $('.opa-lay').click(function() {
              $('.navtop-pop').slideToggle();
              $('.opa-lay').toggleClass("fixed");
            });
        })
        // 专区导航 slide
        var swiper = new Swiper('.nav-swiper-container', {
            slidesPerView: 'auto',
            onInit: function(swiper){
              var totalWidth = 0;
              $('.swiper-slide').each(function() { totalWidth += $(this).width(); });
            }
        });
        // 
        var swiper = new Swiper('.ban-swiper-container', {
            slidesPerView: 1,
        });
        // 
        var swiper = new Swiper('.list-swiper-container', {
            width: window.innerWidth - (window.innerWidth * 0.035 * 2),
            slidesPerView: 4,
            spaceBetween: 10,
            freeMode: true
        });
        // 
        var swiper = new Swiper('.pic-swiper-container', {
            width: window.innerWidth - (window.innerWidth * 0.035 * 2),
            slidesPerView: 2,
            spaceBetween: 10,
            freeMode: true
        });
         TouchSlide({ 
            slideCell:"#ideBox",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell:".bd ul", 
            effect:"leftLoop", 
            autoPage:true,//自动分页
            autoPlay:true //自动播放
          });

    </script>