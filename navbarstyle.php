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
                                <h3>Navbar Tasarım Ayarları</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Navbar</li>
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
                                    <h4 class="card-title">Renk Seçenekleri</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="navbarstyle.php" method="post">
                                        <input type="hidden" name="style" value="1" />
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Arkaplan Rengi</label>
                                                            <div class="position-relative">
                                                                <input name="backgroundColor" type="text" class="form-control"
                                                                    placeholder="#282828" id="first-name-icon"
                                                                    value="<?php echo $result['navBarBackgroundColor'] ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-paint-bucket"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Yazı Rengi</label>
                                                            <div class="position-relative">
                                                                <input name="textColor" type="text" class="form-control" placeholder="#F5F5F5"
                                                                    id="email-id-icon"
                                                                    value="<?php echo $result['navBarTextColor'] ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-alphabet"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="mobile-id-icon">Aktif Rengi</label>
                                                            <div class="position-relative">
                                                                <input name="selectedColor" type="text" class="form-control" placeholder="#000000"
                                                                    id="mobile-id-icon"
                                                                    value="<?php echo $result['navBarSelectedColor'] ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-eyedropper"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Pasif Rengi</label>
                                                            <div class="position-relative">
                                                                <input name="unSelectedColor" type="text" class="form-control" placeholder="#282828"
                                                                    id="password-id-icon"
                                                                    value="<?php echo $result['navBarUnSelectedColor'] ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-eyedropper"></i>
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
                                    <h4 class="card-title">Navbar Ayarları</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="navbarstyle.php" method="post">
                                            <input type="hidden" name="settings" value="1" />
                                            <div class="form-body">
                                                <div class="row">


                                                    <div class="col-md-8 form-group">
                                                        <div class="form-check form-switch">
                                                            <?php if($result['navBarStatus'] == "1"){
                                                                echo '<input name="barStatus" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>';
                                                            } else {
                                                                echo '<input name="barStatus" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">';
                                                            }
                                                            ?>
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Alt Menü</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8 form-group">
                                                        <div class="form-check form-switch">
                                                        <?php if($result['independentTab'] == "1"){
                                                                echo '<input name="independentTab" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>';
                                                            } else {
                                                                echo '<input name="independentTab" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">';
                                                            }
                                                            ?>
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Bağımsız WebView</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-outline-primary me-1 mb-1">Güncelle</button>
                                                    </div>

                                                    <div class="card-body">
                                                        Bağımsız WebView nedir?<br>
                                                        Bu özellik, alt menü butonlarınızın birbirinden bağımsız birer sekme olarak çalışmasına olanak tanımaktadır.
                                                        Standart uygulamalarda olduğu gibi alt menüden bir butona basıldığında sizin belirlediğiniz URL baştan yüklenmez.
                                                        Kullanıcının son kaldığı sayfa uygulama arkaplanında açık kalmaya devam eder ve tekrar aynı butona bastığında
                                                        sayfa tüm işlevleri, doldurduğu textboxlar, arkaplanda video/müzik oynuyorsa devam eder.
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
                                    <h4 class="card-title">Renk Seçenekleri</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style1.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 1</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style2.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 2</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style3.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 3</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style4.gif"
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
                                                <img class="w-100 active" src="assets/navbar/style5.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 5</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style6.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 6</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style7.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 7</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style8.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 8</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style9.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 9</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style10.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 10</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style11.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 11</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style12.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 12</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style13.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 13</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style14.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 14</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style15.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 15</label>
                                                </center>
                                            </div>
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style16.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 16</label>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                                            <div class="col-6 col-sm-6 col-lg-6 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-100 active" src="assets/navbar/style17.gif"
                                                data-bs-target="#Gallerycarousel" 
                                                data-bs-slide-to="0">
                                                <center>
                                                    <label for="mobile-id-icon">Tasarım 17</label>
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
                                    <h4 class="card-title">Navbar Ayarları</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="navbarstyle.php" method="post">
                                            <input type="hidden" name="navstyle" value="1" />
                                            <div class="form-body">
                                                <div class="row">
                                                        
                                                    <h6>Tasarım Değiştir</h6>
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text" for="inputGroupSelect01">Tasarım</label>
                                                            <select name="navBarStyle" class="form-select" id="inputGroupSelect01">
                                                                <option value="<?php echo $result['navBarStyle']; ?>" selected><?php echo $result['navBarStyle']; ?></option>
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