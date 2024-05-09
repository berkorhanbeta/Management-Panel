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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Şifre Değiştir</h5>
                                </div>
                                <div class="card-body">

                                <?php 
                                    if(isset($_POST["update_password"]) && $_POST["update_password"] == "1") {

                                    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>';
                                    echo 'Şifreniz başarıyla değiştirildi.';
                                    echo '</strong></div>';
                                    }
                                ?> 


                                    <form action="forgot-password.php" method="post">
                                    <input type="hidden" name="update_password" value="1" />
                                        <div class="form-group my-2">
                                            <label for="password" class="form-label">Yeni Şifre</label>
                                            <input type="password" name="newpassword" id="password" class="form-control"
                                                placeholder="Yeni şifrenizi girin" value="">
                                        </div>

                                        <div class="form-group my-2 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-outline-primary me-1 mb-1">Değiştir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Kullanıcı Adı Değiştir</h5>
                                </div>
                                <div class="card-body">

                                <?php 
                                    if(isset($_POST["update_username"]) && $_POST["update_username"] == "1") {

                                    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>';
                                    echo 'Kullanıcı Adınız başarıyla değiştirildi.';
                                    echo '</strong></div>';
                                    }


                                    ?> 


                                    <form action="forgot-password.php" method="post">
                                    <input type="hidden" name="update_username" value="1" />
                                        <div class="form-group my-2">
                                            <label for="username" class="form-label">Kullanıcı Adınız</label>
                                            <input type="text" name="username" id="username" class="form-control"
                                                placeholder="Yeni Kullanıcı Adınız" value="<?php echo $result['username']; ?>">
                                        </div>

                                        <div class="form-group my-2 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-outline-primary me-1 mb-1">Değiştir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>



            <?php include "inc/footer.php"; ?>
        </div>
    </div>


</body>
</html>