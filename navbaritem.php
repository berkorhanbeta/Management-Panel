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
                                <h3>Navbar Butonları</h3>
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

                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Buton Ekle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="navbaritem.php" method="post">
                                            <input type="hidden" name="addItem" value="1" />
                                            <div class="row">
                                                <div class="col-md-6 col-12">

                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Buton Yazısı</label>
                                                        <div class="position-relative">
                                                            <input name="title" type="text" class="form-control" placeholder="Anasayfa"
                                                                id="mobile-id-icon">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-alphabet"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6 col-12">
                                                   
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Açılacak Adres</label>
                                                        <div class="position-relative">
                                                            <input name="url" type="text" class="form-control" placeholder="https://www.APPBeta.net"
                                                                id="mobile-id-icon">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-browser-chrome"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-12">
                                                    
                                                    <div class="form-group has-icon-left">
                                                        <label for="mobile-id-icon">Material Icon</label>
                                                        <div class="position-relative">
                                                            <input name="icon" type="text" class="form-control" placeholder="home"
                                                                id="mobile-id-icon">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-house-door"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-outline-primary me-1 mb-1">Ekle</button>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="card-body">
                                            Alt menünüzü kişileştirirken, ikonlarını Google Fonts Material Icons'larından seçmeniz gerekmektedir.
                                            <a href="https://fonts.google.com/icons?selected=Material+Symbols+Outlined:home:FILL@0;wght@400;GRAD@0;opsz@24&icon.query=home&icon.platform=android">Buradan </a>
                                            kullanmak istediğiniz ikonu seçip, <b>' Use in Android Studio '</b> bölümündeki kodu kutucuğa yazmanız yeterlidir.
                                            <b>Örn : Sepet ikonu için ' shopping_cart '.</b>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<hr>


                <section class="section">
                        <div class="row" id="basic-table">
                            <div >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Mevcut Butonlar</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">

                                            <!-- Table with outer spacing -->
                                            <div class="table-responsive">
                                                <table class="table table-lg">
                                                    <thead>
                                                        <tr>
                                                            <th>Yazı</th>
                                                            <th>Adres</th>
                                                            <th>Ikon</th>
                                                            <th>Eylemler</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php 
                                                        
                                                        $getData1 = "SELECT * FROM appbeta_navbar ORDER BY id ASC";
                                                        $allData1 = $conn->query($getData1);
                                                        while($navbaritem = $allData1->fetch_assoc()) {

                                                            $title = $navbaritem['title'];
                                                            $url = $navbaritem['url'];
                                                            $icon = $navbaritem['icon'];

                                                            echo '<tr>';
                                                            echo "<td>$title</td>";
                                                            echo "<td>$url</td>";;
                                                            echo "<td>$icon</td>";;
                                                            echo '<td>
                                                                    <form action="navbaritem.php" method="post">
                                                                        <input type="hidden" name="delete" value="1">
                                                                        <input type="hidden" name="id" value="' . $navbaritem['id'] . '">
                                                                        <button type="submit" class="btn btn-outline">
                                                                            <i class="badge-circle badge-circle-white text-secondary font-medium-1" data-feather="trash"></i>
                                                                        </button>
                                                                    </form>
                                                                ';
                                                            echo '
                                                                <form action="itemedit.php" method="post">
                                                                    <input type="hidden" name="edit" value="1">
                                                                    <input type="hidden" name="id" value="' . $navbaritem['id'] . '">
                                                                    <button type="submit" class="btn btn-outline">
                                                                        <i class="badge-circle badge-circle-white text-secondary font-medium-1" data-feather="edit"></i>
                                                                    </button>
                                                                </form>
                                                            </td>';
                                                        echo '</tr>';
                                                            

                                                        }

                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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