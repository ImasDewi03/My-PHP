<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website UTS</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>MyQuizz</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Start to Quizz</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#logout" class="tbl-pink">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
         <!-- Untuk Home -->
         <section id="home">
         <img src="https://img.freepik.com/premium-vector/young-man-learning-home-with-help-huge-books-chair-plant-headphones-online-education-concept_65580-475.jpg?size=626&ext=jpg&ga=GA1.2.1376573389.1667741535" />
            <div class="kolom">
                <p class="deskripsi">Pembelajaran melalui quizz</p>
                <h2>Ayo Belajar, Kembangkan Semangat Berprestasimu!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, veniam!</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>
    </div>

    <div class="wrapper">
        <!-- Courses -->
        <section id="courses">
            <div class="kolom">
                <p>
                <h1>Quizz Singkat</h1>
                </p>

                <p><label>1. Monumen terkenal di kota Paris adalah menara?</label><br>
                Jawab : <input type="text" id="monumen"><br>
                <div id="monumen_response"></div>
                <br>
                </p>

                <p><label>2.  Pohon yang melambangkan hari natal adalah pohon?</label><br>
                Jawab : <input type="text" id="pohon"><br>
                <div id="pohon_response"></div>
                <br>
                </p>

                <p><label>3. Reog merupakan kesenian dari kota?</label><br>
                Jawab : <input type="text" id="reog"><br>
                <div id="reog_response"></div>
                <br>
                </p>

                <p><label>4. Presiden pertama di negara Indonesia?</label><br>
                Jawab : <input type="text" id="soekarno"><br>
                <div id="soekarno_response"></div>
                <br>
                </p>

                <p><label>5. Ibukota dari Jawa Timur ??</label><br>
                Jawab : <input type="text" id="Surabaya"><br>
                <div id="Surabaya_response"></div>
                <br>
                </p>

                <button onclick="cek_jawaban()">Kirim</button>
                <button onclick="history.go(0)">Refresh</button>
            </div>    
        </section>
   </div>

   <div id="contact">
    <div class="wrapper">
        <div class="footer">
            <div class="footer-section">
                <h3>MyQuizz</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, ea.</p>
            </div>
            <div class="footer-section">
                <h3>About</h3>
                <p>Aditya Putra Pratama, 21091397043, Kelas A, D4 Manajemen Informatika, UNESA</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>jl. Ketintang Barat no 1</p>
                <p>Kode Pos : 21876</p>
            </div>
            <div class="footer-section">
                <h3>Sosial</h3>
                <p><b>Youtube : </b>Aditya Pupra</p>
            </div>
        </div>
    </div>
</div>

<div id="copyright">
    <div class="wrapper">
        &copy; 2022. <b>MyQuizz.</b> All Rights Reserved.
    </div>
</div>

   <script src="script.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>