<?php require 'inc/ustkisim.php'; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php
    require 'inc/top_nav.php'; 
    require 'inc/left_nav.php';
    ?>

</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">HAKKIMDA GÜNCELLE</h1>
                <div class="row">
                   <div class="col-lg-12">


                    <?php 
                    $db->sql="select * from tb_about";
                    $about=$db->select(1);

                    $hakkimda=$about->about;
                    $isim=$about->name;
                    $unvan=$about->unvan;
                    $mail=$about->mail;
                    $tel=$about->phone;
                    $resim=$about->profile_img;




                    ?>


                    <?php 

                    if (pisset()) {
                         # code...

                        $hakkimda=post("hakkimda");
                        $isim=post("isim");
                        $unvan=post("unvan");
                        $mail=post("mail");
                        $telefon=post("telefon");
                        $resim=post("resim");


                        
                        $db->sql ="update tb_about set about =?, name=?, unvan=?, mail=?, phone=?, profile_img =? ";
                        $db->veri = array($hakkimda,$isim,$unvan,$mail,$telefon,$resim);
                        $guncelle=$db->update();
                        if ($guncelle) {
                            echo '<div class="alert alert-success">
                            <strong>Başarlı</strong><br> Değişiklikler Eklendi   </div>';
                        }else{
                            echo '<div class="alert alert-danger">
                            <strong>Başarısız</strong><br> Değişiklikler Eklenemedi  </div>';
                        }
                    }
                    ?>


                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hakkımda Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST">

                                        <div class="form-group">
                                            <label>Hakkımda </label>
                                            <textarea class="form-control ckeditor"  name="hakkimda" id="" rows="8"><?=$hakkimda; ?></textarea>

                                        </div>

                                        <div class="row"> 

                                            <div class="col-lg-6"> 

                                                <div class="form-group">
                                                    <label>İsim Soyisim</label>
                                                    <input class="form-control" name="isim" value="<?=$isim ; ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label>Ünvan</label>
                                                    <input class="form-control" name="unvan" value="<?=$unvan ; ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label>Mail Adresi</label>
                                                    <input class="form-control" name="mail" value="<?=$mail ; ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label>Telefon</label>
                                                    <input class="form-control" name="telefon" value="<?=$tel ; ?>">

                                                </div>
                                                <div class="form-group">
                                                    <label>Resim</label>
                                                    <input class="form-control" name="resim" value="<?=$resim ; ?>">

                                                </div>

                                            </div>  


<!--
                                     <div class="col-lg-6">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>


                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>


                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" name="a" value="<?=$tel ; ?>">
                                        </div>
                                        </div>




                                      </div>
                                  -->                                     

                                    <?php/* require 'inc/yetenek.php' */ ?>








                            </div>
                            <input type="submit" Value="GÜNCELLE" class="btn btn-info">
                        </form>
                    </div>

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php require 'inc/altkisim.php' ?>