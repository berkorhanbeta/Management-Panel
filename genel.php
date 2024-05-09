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

<?php include "inc/header.php"; ?>

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
                                <h3>Genel Ayarlar</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Genel</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                

<hr>
                <section class="section">
                    <div class="row match-height">

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Site Ayarları</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="genel.php" method="post">
                                            <input type="hidden" name="update_website" value="1" />
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Website</label>
                                                            <div class="position-relative">
                                                                <input name="website" type="text" class="form-control"
                                                                    placeholder="Örn : https://www.APPBeta.net" id="first-name-icon"
                                                                    value="<?php echo $result['siteUrl']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-browser-chrome"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">

                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Host</label>
                                                            <div class="position-relative">
                                                                <input name="host" type="text" class="form-control" placeholder="Örn : appbeta.net"
                                                                    id="email-id-icon"
                                                                    value="<?php echo $result['hostUrl']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-server"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-outline-primary me-1 mb-1">Güncelle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Renk Seçenekleri</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form " action="genel.php" method="post">
                                        <input type="hidden" name="color" value="1" />
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Bildirim Alan Rengi</label>
                                                            <div class="position-relative">
                                                                <input name="statusBarColor" type="text" class="form-control"
                                                                    placeholder="#282828" id="first-name-icon"
                                                                    value="<?php echo $result['statusBarColor'] ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-paint-bucket"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-outline-primary me-1 mb-1">Güncelle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
<hr>
            </div>



            <?php include "inc/footer.php"; ?>
        </div>
    </div>



</body>
</html>