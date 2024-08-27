<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
    <title>(M0001)Mèo anh lông ngắn</title>
    <!------------------------------------ Thư viện font chữ ------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <!------------------------------------ Thư viện icon ------------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!------------------------------------ đường dẫn ------------------------------------>
    <script src="../Login/Login.js" defer></script></script>
    <link rel="stylesheet" href="../ViewProduct/ViewProduct.css">
  </head>

  <body>
    <!------------------------------------ header ------------------------------------>
    <?php
      include "../view/Header.php";
    ?>

    <!------------------------------------ section ------------------------------------>
    <section>
      <div class="view-container">
        <!------------------------------------ main ------------------------------------>
        <div class="view-main">
            <div class="view-main-over">
                <div class="view-main-left">
                  <?php
                    include "../connect.php";
                    if(isset($_GET['id'])){
                      $id=$_GET['id'];
                      $id4 = substr($id,0,4);
                    }else{
                      $id="";
                    }
                    $sql = "SELECT * FROM all_product_cat WHERE LEFT(id_cat,4) = '$id4'";
                    $result = $conn->query($sql);
                    $rows = array();
                    if($result && $result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                        }
                    }
                  ?>
                  <?php
                    echo  '<div class="view-main-left-big-img" style="background-image: url('.$rows[0]['anh'].');"></div>';
                  ?>
                    <div class="view-main-left-small">
                        <?php
                          foreach($rows as $row){
                            echo  '<div class="view-main-left-small-img" style="background-image: url('.$row['anh'].');">';
                              echo  '<div class="small-img-text"></div>';
                            echo  '</div>';
                          }
                        ?>
                    </div>
                    <div class="view-left-note">Màu sắc thực tế có thể bị lệch 5-10%</div>
                    <button class="view-main-left-prev" onclick="mainLeftPrev()"><i class="fa-solid fa-backward"></i></button>
                    <button class="view-main-left-next" onclick="mainLeftNext()"><i class="fa-solid fa-forward"></i></button>
                </div>
                <div class="view-main-right">
                    <div class="main-right-name">
                      <?php
                        echo  $rows[0]['ten_meo'];
                      ?>
                      <div class="main-right-name-id"><?php echo   $rows[0]['id_cat'] ?></div>
                    </div>
                    <div class="main-right-information">
                      <div class="main-right-infor-head">
                        Thông tin
                      </div>
                      <div class="main-right-infor-body">
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Tuổi:</span> <span class="infor-body-age"> <?php echo $rows[0]['tuoi'] ?></span></div>
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Cân nặng:</span> <span class="infor-body-age"> <?php echo $rows[0]['can_nang'].' kg' ?></span></div>
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Giống:</span> <span class="infor-body-age"> <?php if($rows[0]['sex'] == 0){echo 'Cái';}else{echo 'Đực';} ?></span></div>
                        <div> <i class="fa-solid fa-circle"></i> <span class="span1">Nguồn gốc:</span> <span class="infor-body-age"><?php echo $rows[0]['nguon_goc'] ?></span></div>
                      </div>
                    </div>
                    <div class="main-right-vaccin">
                      <div class="main-right-vaccin-head">
                        Tình trạng tiêm phòng
                      </div>
                      <div class="main-right-vacin-body">
                        <div> <i class="fa-regular fa-circle-check"></i> <span class="infor-body-vaccin-1"> Vaccin 4 bệnh</span></div>
                        <div> <i class="fa-regular fa-circle-check"></i> <span class="infor-body-vaccin-2"> Vaccin dại</span></div>
                        <div> <i class="fa-regular fa-circle-check"></i> <span class="infor-body-vaccin-3"> Vaccin viêm phúc mạc</span></div>
                        <div> <i class="fa-regular fa-circle-check"></i> <span class="infor-body-vaccin-4"> Tẩy giun</span></div>
                      </div>
                  </div>
                  <div class="main-right-price">
                    <span><?php echo number_format($rows[0]['price'],0,",",".") ?></span><sup>đ</sup>
                    <div class="main-right-price-button">
                      <div class="main-price-button-add" onclick="addToCart()">Thêm vào giỏ hàng</div>
                     <div class="main-price-button-buy" onclick="addToCart()"><a href="../Cart/Cart.php">Mua ngay</a></div>
                    </div>                    
                  </div>
                </div>
            </div>
        </div>
      </div>
<!------------------------------------ character ------------------------------------>
      <div class="view-character-container-over" style="background-color: rgba(250, 205, 168, 0.479);">
        <div class="character-text-head">
          <p>đặt điểm giống mèo:</p>
        </div>
        <div class="character-text-name">Anh lông ngắn</div>
        <div class="view-character-container">
          <div class="character-img" style="background-image: url(../images/characterBaTu.png);">
          </div>
        </div>
      </div>
      <!------------------------------------ các bé mèo khác ------------------------------------>
      <div class="view-see-other-text">Xem thêm các bé khác:</div>
      <div class="view-see-other-container">
        <div class="view-other-see-container">
          <div class="view-see-other-over">
            <div class="view-see-other-img" style="background-image: url(./images/view1.jpg);">
              <a href="../Homes/Home.html"></a>
            </div>
            <div class="view-see-other-img" style="background-image: url(./images/view2.jpg);">
              <a href="../Homes/Home.html"></a>
            </div>
            <div class="view-see-other-img" style="background-image: url(./images/view3.jpg);">
              <a href="../Homes/Home.html"></a>
            </div>
            <div class="view-see-other-img" style="background-image: url(./images/view4.jpg);">
              <a href="../Homes/Home.html"></a>
            </div>
            <div class="view-see-other-img" style="background-image: url(./images/view2.jpg);">
              <a href="../Homes/Home.html"></a>
            </div>
            <div class="view-see-other-img" style="background-image: url(./images/view3.jpg);">
              <a href="../Homes/Home.html"></a>
            </div>
          </div>
            <button class="view-see-other-arrows-prev" onclick="seeOtherPrev()"><i class="fa-solid fa-circle-chevron-left"></i></button>
            <button class="view-see-other-arrows-next" onclick="seeOtherNext()"><i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>
      </div>
      <!------------------------------------ infor right ------------------------------------>
      <div class="right-contact">
        <div class="right-contact-over">
            <img src="../images/gif-meo-right.gif" alt="gif-meo-right">
            <div class="right-contact-main-over">
                <div class="right-contact-main">
                    <div class="right-email">
                        <div class="right-text-none-email">
                            <div class="text-right-ehz"><a href="mailto:2251120313@ut.edu.vn">Email</a></div>
                        </div>
                        <img src="../images/icon-right-email.png" alt="icon-right-email">
                    </div>
                    <div class="right-hotline">
                        <div class="right-text-none-hotline">
                            <div class="text-right-ehz"><a href="https://zalo.me/0869801744">Hotline</a></div>
                        </div>
                        <img src="../images/icon-right-hotline.png" alt="icon-right-hotline">
                    </div>
                    <div class="right-zalo">
                        <div class="right-text-none-zalo">
                            <div class="text-right-ehz"><a href="https://zalo.me/0869801744">Zalo</a></div>
                        </div>
                        <img src="../images/icon-right-zalo.png" alt="icon-right-zalo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!------------------------------------ footer ------------------------------------>

    <?php
      include "../view/Footer.php";
    ?>

    <script src="../Homes/Home.js"></script>
    <script src="../ViewProduct/ViewProduct.js"></script>
  </body>
</html>
