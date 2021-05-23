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
                            <h1 class="page-header">Admin</h1>

                                <?php echo "genel"; ?>

                                            <?php 
                                            $db->sql ="select sum(hit) from tb_experience";
                                            $a=$db->select(1);
                                            print_r($a);
                                             ?>

                            <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">

                                            

                                            <div class="huge"><?php  $a; ?></div>
                                            <div>Toplam Görüntülenme</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
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