<!-- 焦点图 -->

        <div id="ideBox" class="slideBox">

          <div class="bd">

            <ul>

              <?php

                //得到数据库中所有商品

                require_once '../include.php';

                $sql="select * from jdtuku  where status like '%是%' order by time desc limit 0,5";

                 if($sql){

                  $rows=fetchAll($sql);

                  if(!$rows){  

                     echo "对不起，没有相关的图片";

                     exit();

                  }

                }

                else{

                  echo "对不起，没有相关的图片";

                }

              ?>

                <?php foreach($rows as $row):?>

                <li>

                  <a class="pic" href="<?php echo $row['href']; ?>">

                    <?php 

                      $proImgs=getAllImgByJdtukuId($row['id']);

                      foreach($proImgs as $img):

                    ?>

                      <img src="../Jdtuku/<?php echo $img['albumPath'];?>" alt="<?php echo $row['title']; ?>"/>

                   <?php endforeach;?>

                  </a>

                  <p class="slide-text-opa"></p>

                  <p class="slide-text-box"><a href="<?php echo $row['href']; ?>"><?php echo $row['title']; ?></a></p>

                </li>

              <?php  endforeach;?>

            </ul>

          </div>

          <div class="hd none">

            <ul></ul>

          </div>

        </div>

      <!-- tag -->

      <div class="mb-zq-tag">

        <ul class="clearfix">

          <?php

             $ct="select * from cate ";

            $rw=fetchAll($ct);

          ?>

          <?php foreach($rw as $row):?>

            <li>

              <a href="shangpinzhanxian.php?shangpincate=<?php echo $row['id'];?>" class="<?php echo $row['id'];?>"><?php echo $row['cName'];?></a>

            </li>

          <?php  endforeach;?>

          <li>

            <a href="rencaizhaopin.php" class="126">人才招聘</a>

          </li>

          <li>

            <a href="rencaifazhan.php" class="107">发展空间</a>

          </li>

          <li>

            <a href="gonsironyu.php" class="28">公司荣誉</a>

          </li>
          <li>

            <a href="hudon.php" class="29">互动专区</a>

          </li>

        </ul>

      </div>