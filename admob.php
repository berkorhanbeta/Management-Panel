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
                                <h3>Reklam Ayarları</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">AdMob</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">AdMob</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="admob.php" method="post">
                                            <input type="hidden" name="update_admob" value="1" />
                                            <div class="row">
                                                <div class="col-md-6 col-12">

                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Android Banner ID</label>
                                                        <div class="position-relative">
                                                            <input name="android_banner" type="text" class="form-control" placeholder="ca-app-pub"
                                                                id="mobile-id-icon" value="<?php echo $result['androidBanner']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-android2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6 col-12">
                                                   
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Android Interstitial ID</label>
                                                        <div class="position-relative">
                                                            <input name="android_interstitial" type="text" class="form-control" placeholder="ca-app-pub"
                                                                id="mobile-id-icon" value="<?php echo $result['androidInterstitial']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-android2"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-12">
                                                    
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">iOS Banner ID</label>
                                                        <div class="position-relative">
                                                            <input name="ios_banner" type="text" class="form-control" placeholder="ca-app-pub"
                                                                id="mobile-id-icon" value="<?php echo $result['iOSBanner']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-apple"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-12">
                                                    
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">iOS Interstitial ID</label>
                                                        <div class="position-relative">
                                                            <input name="ios_interstitial" type="text" class="form-control" placeholder="ca-app-pub"
                                                                id="mobile-id-icon" value="<?php echo $result['iOSInterstitial']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-apple"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-12">

                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Geçis Reklam Gösterimi</label>
                                                        <div class="position-relative">
                                                            <input name="interstitial_count" type="text" class="form-control" placeholder="Örn : 3"
                                                                id="mobile-id-icon" value="<?php echo $result['interstitial_count']; ?>">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-badge-ad-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
 
                                                <div class="form-group col-12">
                                                        <div class="form-check form-switch">
                                                        <?php if($result['admobStatus'] == "1"){
                                                                echo '<input name="admobActivate" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>';
                                                            } else {
                                                                echo '<input name="admobActivate" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">';
                                                            }
                                                            ?>
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Reklamlar</label>
                                                        </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-outline-primary me-1 mb-1">Güncelle</button>
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