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
                <h1 class="page-header">Deneyim EKLE</h1>
                <div class="row">
                   <div class="col-lg-12">
                    <?php 


                    if (pisset()) {

                        $deneyim_baslik=post("deneyim_baslik");
                        $deneyim_sirket=post("deneyim_sirket");
                        $deneyim_img=post("deneyim_img");
                        $deneyim_aciklama=post("deneyim_aciklama");
                        $deneyim_sure=post("deneyim_sure");
                        $deneyim_ay=post("deneyim_ay");


                        $db->sql ="insert into  tb_experience set experience_title =?, experience_company =?, experience_img=?, experience_content=?, experience_period =?,mounth =?  ";
                        $db->veri = array($deneyim_baslik, $deneyim_sirket,$deneyim_img,$deneyim_aciklama, $deneyim_sure, $deneyim_ay);
                        $ekle=$db->insert();

                        if ($ekle) {
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
                            İçerik Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST">


                                       <div class="form-group">
                                        <label>Görev/Pozisyon</label>

                                        <textarea class="form-control" name="deneyim_baslik" rows="2"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label>Şirket </label>
                                        <input class="form-control" name="deneyim_sirket" value="">


                                    </div>
                                    <div class="form-group">
                                        <label>Şirket resim</label>
                                        <input class="form-control" name="deneyim_img" value="">


                                    </div> 
                                    <div class="form-group">
                                        <label>Deneyim Açıklaması</label>
                                        <textarea class="form-control ckeditor" name="deneyim_aciklama" id="" rows="5"></textarea>

                                    </div> 

                                    <div class="form-group">
                                        <label>Çalıma süresi </label>
                                        <input class="form-control" name="deneyim_sure" value="" placeholder=" haz 2018- Tem 2020 şeklinde *">


                                    </div>

                                    <div class="form-group">
                                        <label>Deneyim ay</label>
                                        <input class="form-control" name="deneyim_ay" value="" placeholder="16 ay gibi*">


                                    </div>


                                    <input type="submit" Value="EKLE" class="btn btn-info">



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