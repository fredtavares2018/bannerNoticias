<?php

include 'conecta.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>BANNER NOTÍCIAS</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- ##### Hero Area Start ##### -->
    <section class="hero--area "></section>
    <div class="container">
        <div class="row no-gutters mt-5">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="tab-content">

                    <?php

                    $recebendo_noticias = "SELECT *
                            FROM  noticias 
                            ORDER BY id desc
                            ";
                    $query_noticias = mysqli_query($conn, $recebendo_noticias) or die(mysqli_error($conn));
                    $i = 1;
                    while ($linha = mysqli_fetch_array($query_noticias)) {

                    ?>

                        <div class="tab-pane fade <?php if ($i == 1) {
                                                        echo 'show active';
                                                    }; ?>" id="post-<?php echo $i ?>" role="tabpanel" aria-labelledby="post-<?php echo $i ?>-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(back-end/<?php echo $linha['imagem_not'] ?>);">

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="noticias.php?idNot=<?php echo $linha['id'] ?>" class="post-cata" target="_blank">ver +</a>
                                    <a href="#" class="post-title"><?php echo $linha['titulo'] ?></a><br><br>
                                    <div class="post-meta d-flex">
                                        <!-- <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a> -->
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">
                                    <?php
                                    $date = date_create($linha['created_at']);
                                    echo date_format($date, "d/m/Y H:i:s");
                                    ?></span>
                            </div>
                        </div>

                    <?php $i++;
                    } ?>

                </div>
            </div>

            <!-- MATERIAL DA LATERAL -->

            <div class="col-12 col-md-5 col-lg-4">
                <ul class="nav vizew-nav-tab" role="tablist">

                    <?php

                    $recebendo_noticias = "SELECT *
                                            FROM  noticias 
                                            ORDER BY id desc
                                            ";
                    $query_noticias = mysqli_query($conn, $recebendo_noticias) or die(mysqli_error($conn));
                    $i = 1;
                    while ($linha = mysqli_fetch_array($query_noticias)) {

                    ?>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($i == 1) {
                                                    echo 'active';
                                                };  ?>" id="post-<?php echo $i ?>-tab" data-toggle="pill" href="#post-<?php echo $i ?>" role="tab" aria-controls="post-<?php echo $i ?>" aria-selected="true">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="back-end/<?php echo $linha['imagem_not'] ?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title"><?php echo $linha['titulo'] ?></h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                    <?php $i++;
                    } ?>

                </ul>
            </div>
        </div>
    </div>
    </section>
    <!-- ##### Hero Area End ##### -->


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>