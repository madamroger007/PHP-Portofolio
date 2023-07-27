<?php
// Fungsi untuk mengatur tema pada cookie
function setThemeCookie($theme)
{
    setcookie('theme', $theme);
}

// Jika ada permintaan perubahan tema
if (isset($_GET['theme'])) {
    $theme = $_GET['theme'];
    if ($theme === 'dark' || $theme === 'light') {
        setThemeCookie($theme);
    }
}

// Cek nilai cookie untuk tema yang aktif
$activeTheme = isset($_COOKIE["theme"]) ? $_COOKIE["theme"] : "light";
?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Perkenalan Diri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/2597be487a.js" crossorigin="anonymous"></script>
</head>


<body class="<?php echo $activeTheme === 'dark' ? 'dark-mode' : ''; ?>">
    <div class="container">
        <h1 style="margin-bottom: 70px;">About Me</h1>
        <div class="flex">


            <!-- Gambar -->
            <div class="sub-container">
                <img src="/src/foto-transformed.png" alt="Girl in a jacket" class="foto">
                <div class="outline-offset">
                </div>
            </div>
            <!-- Gambar -->

            <!-- Isi konten -->
            <div class="container-content">
                <div class="paragraph">
                    <h4>Nama saya adalah <span class="title-paraf">Adam setiadi</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit minus labore ducimus beatae, iste adipisci, ipsam delectus saepe facere asperiores debitis nostrum? Dicta consectetur possimus mollitia eum sequi voluptatem magnam.
                    Eum dolor exercitationem et iste non ipsum maxime obcaecati modi. Atque in vitae nihil amet minus veniam sit, maiores odit reprehenderit consectetur libero sequi debitis, aliquam architecto, at ad corrupti.</p>
                </div>
                <div class="content">
                    <?php
                    $nama = "Adam setiadi";
                    $nomor_registrasi = "1936763860-55";
                    $alamat = "Desa Neglasari Kecamatan Banjaran kabupaten bandung";
                    $motivasi = "Ingin menambah wawasan";


                    echo "<p>Nama: <span class='highlight'><br>$nama</span></p>";
                    echo "<p>nomor_registrasi :<span class='highlight'><br> $nomor_registrasi</span></p>";
                    echo "<p>Alamat: <span class='highlight'><br>$alamat</span></p>";
                    echo "<p>Motivasi: <span class='highlight'><br>$motivasi</span></p>";
                    ?>
                </div>

            </div>


        </div>
        <!-- Isi konten -->

        <!-- Button -->
        <div class="shareicons">

            <div class="shareicons__socialMedia3">
                <ul>

                    <a href="https://www.linkedin.com/in/adamstdi/">
                        <li class="telegram round">
                            <i class="fab fa-linkedin" style="font-size:24px" target="_blank">
                            </i>
                        </li>
                    </a>

                    <a href="https://github.com/madamroger007" target="_blank">
                        <li class="github round">
                            <i class="fab fa-github" style="font-size:24px; ">


                            </i>
                        </li>
                    </a>

                    <a href="https://www.instagram.com/adamstdi._/" target="_blank">
                        <li class="instagram round">
                            <i class="fab fa-instagram" style="font-size:24px"></i>
                        </li>
                    </a>

                </ul>

            </div>

        </div>
        <!-- Button -->
    </div>
    <label class="switch">
        <input type="checkbox" id="toggleTheme" <?php echo $activeTheme === 'dark' ? 'checked' : ''; ?>>
        <span class="slider rounds"></span>
    </label>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $("#toggleTheme").on('change', function() {
            if ($(this).is(':checked')) {
                document.cookie = "theme=dark; ";
                $('body').addClass('dark-mode');
            } else {
                document.cookie = "theme=light;  ";
                $('body').removeClass('dark-mode');
            }
        });
    </script>
</body>

</html>