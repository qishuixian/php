 
    <nav class="navtop">
      <div class="row navtop-in">
        <div class="col-xs-3 text-center navtop-logo"><a href="javascript:;"><img src="images/logo.gif" alt=""></a></div>
        <div class="col-xs-6 text-center navtop-gonsi"><img src="images/ziti_03.gif" alt=""></div>
        <div class="col-xs-3 text-right">
          <button type="button" class="nav-search">
            <img src="images/nav-btn.png" alt="">
          </button>
        </div>
        <div class="navtop-pop">
          <form class="" role="search" action="searchShangpin.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="search" placeholder="请输入关键字" name="search">
              <button type="submit" class="btn btn-default">搜索</button>
            </div>
          </form>
          <a href="javascript:;" class="slideUp"></a>
        </div>
      </div>
    </nav>
    <script type="text/javascript">
    function search(){
          var val=document.getElementById("search").value;
          if (val.length>0) {
          window.location="searchShangpin.php?keywords="+val;
          }else{
              alert("对不起，不能为空！！！请重新输入");
          }
      }
  </script>