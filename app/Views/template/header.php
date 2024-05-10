<!DOCTYPE html5>
<html>
    <head>
        <title>Gudang 2IA21</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= base_url('css/main.css') ?>" />
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" media="all" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="outer-wrapper">
            <div class="header-wrapper">
                <img src="<?= base_url("images/logo.png") ?> " alt="Logo"/>
            </div>
            <div class="navbar-wrapper">
                <div id="hamburger-wrapper">
                    <div class="hamburger-toggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="picture">
                    <a href="#"><img src="<?= base_url("images/GambarAkun.png") ?>" alt="GambarAkun"/></a>
                </div>
                <div class="navbar-menu">
                    <ul>
                        <?php
                        $db = db_connect();
                        $builder = $db->table('subject_types')->select('*')->get()->getResultArray();
                        foreach($builder as $subjectType): ?>
                        <li><a href="<?= url_to('showCategory',$subjectType['id']) ?>" class="text-uppercase"><?= $subjectType['title'] ?></a></li>
                        <?php endforeach; ?>
                        <!-- <li><a href="<?= url_to('addPost') ?>" class="text-uppercase">Tambah Post</a></li> -->
                        <?php if(session('role') == 'admin'){ ?>
                        <li><a href="<?= url_to('admin') ?>" class="text-uppercase">Admin Menu</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" id="search-input" class="search-input" placeholder="Cari..."/>
                    <button id="search-icon" class="search-icon"></button>
                </div>
                <script type="text/javascript">
                        document.getElementById('search-icon').addEventListener('click', function() {
                            var input = document.getElementById('search-input');
                            if (input.style.display === 'none' || input.style.display === '') {
                                input.style.display = 'block'; // Tampilkan input search saat ikon search diklik
                            } else {
                                input.style.display = 'none'; // Sembunyikan input search jika sudah ditampilkan
                            }
                        });
                </script>
            </div>
            <div id="overlay-off"></div>
            <!-- Mobile -->
            <script type="text/javascript">
                var menuToggle = document.querySelector(".hamburger-toggle input");
                var pictureAcc = document.querySelector(".picture");
                var nav = document.querySelector(".navbar-menu");
                var overlay = document.querySelector("#overlay-off");
                menuToggle.addEventListener("change", function () {
                  if (menuToggle.checked) {
                    pictureAcc.classList.remove("picture");
                    pictureAcc.classList.add("picture-mobile");
                    nav.classList.remove("navbar-menu");
                    nav.classList.add("navbar-menu-mobile");
                    overlay.id = "overlay";
                  } else {
                    pictureAcc.classList.remove("picture-mobile");
                    pictureAcc.classList.add("picture");
                    nav.classList.remove("navbar-menu-mobile");
                    nav.classList.add("navbar-menu");
                    overlay.id = "overlay-off";
                  }
                });
        
                function updateClassName() {
                  if (window.innerWidth > 920) {
                    pictureAcc.classList.remove("picture-mobile");
                    pictureAcc.classList.add("picture");
                    nav.classList.remove("navbar-menu-mobile");
                    nav.classList.add("navbar-menu");
                    overlay.id = "overlay-off";
                    menuToggle.checked = false;
                  }
                }
                window.addEventListener("load", updateClassName);
                window.addEventListener("resize", updateClassName);
            </script>
            <div class="main-wrapper">