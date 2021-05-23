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
                <h1 class="page-header">Deneyimler</h1>
                <?php 
                $db->sql="select * from tb_experience";
                $deneyimler=$db->select();
                if ($deneyimler == false) {
                    echo '<p> bulunamadı..</p>';
                }else{
                 ?>
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tüm Deneyimler
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php 
                            if (get("islem")=="silindi") {
                                echo '<div class="alert alert-success"><strong>BAŞARILI</strong> Bilgiler Silindi</div> ';
                            }elseif (get("islem")=="silinemedi") {
                                echo '<div class="alert alert-danger"><strong>BAŞARISIZ</strong> Bilgiler Silinemedi</div> ';
                            }
                             ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Deneyim Başlık</th>
                                           
                                            <th>Görüntülenme</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        foreach ($deneyimler as $key => $value) {
                                            
                                          ?>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?php echo $value->experience_title; ?></td>
                                            
                                            <td><?php echo $value->hit; ?></td>
                                            <td> 
                                                <a href="index.php?url=deneyim_guncelle&id=<?=$value->experience_id;?>" class="btn btn-info">Düzelt</a>
                                                <a href="index.php?url=deneyim_sil&id=<?=$value->experience_id;?>" class="btn btn-danger" onclick="return confirm('İçeriği SİLMEK istediğinizden emin misiniz?');">Sil</a>
                                            </td>
                                            
                                        </tr>
                                      <?php
                                      }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <?php } ?>
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