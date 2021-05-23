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
                <h1 class="page-header">DENEYİM GÜNCELLE</h1>
                <div class="row">
                   <div class="col-lg-12">
                    <?php 
                    if (!get("id")) {
                        header("location:index.php"); exit(); 
                    }

                    $id=(int)get("id");
                    $db->sql="select * from tb_experience where experience_id=?";
                    $db->veri=array($id);

                    $icerik=$db->select(1);

                    if ($icerik==false) {
                        header("location:index.php"); exit();
                    }

                    $deneyim_baslik=$icerik->experience_title;
                    $deneyim_sirket=$icerik->experience_company;
                    $deneyim_img=$icerik->experience_img;
                    $deneyim_aciklama=$icerik->experience_content;
                    $deneyim_sure=$icerik->experience_period;
                    $deneyim_ay=$icerik->mounth;


                    //buradan yukarısı içerikleri listelemek için kullandık aşağısı ise içeriği güncellemek için







                    if (pisset()) {

                        $deneyim_baslik=post("deneyim_baslik");
                        $deneyim_sirket=post("deneyim_sirket");
                        $deneyim_img=post("deneyim_img");
                        $deneyim_aciklama=post("deneyim_aciklama");
                        $deneyim_sure=post("deneyim_sure");
                        $deneyim_ay=post("deneyim_ay");


                        $db->sql ="update tb_experience set experience_title =?, experience_company =?, experience_img=?, experience_content=?, experience_period =?,mounth =?  where experience_id=?";
                        $db->veri = array($deneyim_baslik, $deneyim_sirket,$deneyim_img,$deneyim_aciklama, $deneyim_sure, $deneyim_ay,$id);
                        $guncelle=$db->update();

                        if ($guncelle) {
                            echo '<div class="alert alert-success">
                            <strong>Başarlı</strong><br> Değişiklikler Eklendi   </div>';
                        } else{
                            echo '<div class="alert alert-danger">
                            <strong>Başarısız</strong><br> Değişiklikler Eklenemedi  </div>';
                        }
                        
                    }

                    
                    ?>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Deneyim İçerik Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST">

                                        <div class="form-group">
                                            <label>Görev-Pozisyon</label>

                                            <textarea class="form-control" name="deneyim_baslik" rows="2"> <?= $deneyim_baslik ; ?> </textarea>

                                        </div>
                                        <div class="form-group">
                                            <label>Şirket </label>
                                            <input class="form-control" name="deneyim_sirket" value="<?= $deneyim_sirket ; ?>">


                                        </div>
                                        <div class="form-group">
                                            <label>Deneyim image</label>
                                            <input class="form-control" name="deneyim_img" value="<?=$deneyim_img; ?>">
                                            

                                        </div> 
                                        <div class="form-group">
                                        <label>Çalıma süresi </label>
                                        <input class="form-control" name="deneyim_sure" value="<?=$deneyim_sure; ?>" >


                                    </div>

                                    <div class="form-group">
                                        <label>Deneyim ay</label>
                                        <input class="form-control" name="deneyim_ay" value="<?=$deneyim_ay; ?>" >


                                    </div>
                                        <div class="form-group">
                                            <label>Deneyim Açıklama</label>
                                            <textarea class="form-control ckeditor" name="deneyim_aciklama" id="" rows="5"><?=$deneyim_aciklama; ?></textarea>

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