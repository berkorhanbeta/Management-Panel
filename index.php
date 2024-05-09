<?php

/*

BERK ORHAN BETA
APPLICATION MANAGEMENT PANEL
GITHUB VERSION
DOESN'T INCLUDE DB AND PHP CODES.

*/



?>

<!DOCTYPE html>
<html lang="en">

<?php include "inc/header.php";

?>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class='layout-navbar navbar-fixed'>

            <header>
            <?php include "inc/navbar.php";?>
            </header>

            
            
            <div id="main-content">
                
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Hoşgeldiniz!</h3>
                                <p class="text-subtitle text-muted">Yönetim panelizinden uygulamanızı istediğiniz gibi kişiselleştirebilirsiniz.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Anasayfa</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="section">
                    <div class="row match-height">

                        <div class="">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">APPBeta Bildirim Sistemi</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="http://bildirim.appbeta.net/send_notification.php" method="post">
                                    <input type="hidden" name="send_notification" value="1" />
                                    <input type="url" class="form-control" name="comeBackURL" value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" hidden>
                                    <input type="text" class="form-control" name="app_id" value="<?php echo $result["app_id"]; ?>" hidden>
                                    <input type="text" class="form-control" name="api_code" value="<?php echo $result["api_code"]; ?>" hidden>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Ana Baslık</label>
                                                            <div class="position-relative">
                                                                <input name="n_title" type="text" class="form-control" placeholder="Son Dakika!"
                                                                    id="email-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-alphabet-uppercase"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Açıklama</label>
                                                            <div class="position-relative">
                                                                <input name="n_message" type="text" class="form-control" placeholder="APPBeta Mobile'da %30'a varan indirim başladı!"
                                                                    id="email-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-blockquote-left"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Açılması Gereken URL</label>
                                                            <div class="position-relative">
                                                                <input name="launchUrl" type="text" class="form-control" placeholder="https://www.APPBeta.net"
                                                                    id="email-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-browser-chrome"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-outline-primary me-1 mb-1">Gönder</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div>

                    
                </section>

            </div>



            <?php include "inc/footer.php"; ?>
        </div>
    </div>


</body>
</html>