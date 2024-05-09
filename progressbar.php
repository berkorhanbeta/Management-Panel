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
                                <h3>Progress Bar Tasarım Ayarları</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Progress Bar</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <section class="section">
                    <div class="row match-height">

                        <div class="">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Renk Seçenekleri</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form " action="progressbar.php" method="post">
                                        <input type="hidden" name="color" value="1" />
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Yükleniyor Animasyon Rengi</label>
                                                            <div class="position-relative">
                                                                <input name="progressBarColor" type="text" class="form-control" placeholder="#F5F5F5"
                                                                    id="email-id-icon"
                                                                    value="<?php echo $result['progressBarColor'] ?>">
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

                    <div>

                    
                </section>
                

                <hr>

                <section class="section">
                    <div class="row match-height">

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tasarım Seçenekleri</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/1.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 1</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/2.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 2</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/3.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 3</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/4.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 4</label>
                                                </center>
                                            </div>
                                        </div>

                                        <center>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/5.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 5</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/6.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 6</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/7.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 7</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/8.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 8</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/9.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 9</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/10.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 10</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/11.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 11</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/12.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 12</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/13.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 13</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/14.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 14</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/15.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 15</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/16.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 16</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/17.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 17</label>
                                                </center>
                                            </div>

                                        
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/progressbar/18.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 18</label>
                                                </center>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ProgressBar</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="progressbar.php" method="post">
                                            <input type="hidden" name="barStyle" value="1" />
                                            <div class="form-body">
                                                <div class="row">
                                                        
                                                    <h6>Tasarım Değiştir</h6>
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text" for="inputGroupSelect01">Tasarım</label>
                                                            <select name="progressBar" class="form-select" id="inputGroupSelect01">
                                                                <option value="<?php echo $result['progressBar']; ?>" selected><?php echo $result['progressBar']; ?></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                            </select>
                                                        </div>

                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-outline-primary me-1 mb-1">Güncelle</button>
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


                <hr>

            </div>



            <?php include "inc/footer.php"; ?>
        </div>
    </div>


</body>
</html>