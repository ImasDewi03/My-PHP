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
                    <li><a href="quiz.php">Quizz</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="logout.php" class="tbl-pink">Logout</a></li>
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
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>
    </div>


   <div id="contact">
    <div class="wrapper">
        <div class="footer">
            <div class="footer-section">
                <h3>MyQuizz</h3>
            </div>
            <div class="footer-section">
                <h3>About</h3>
                <p>Kelompok 6 "MYQUIZZ" Pemrograman Web</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>jl. Ketintang Barat no 1</p>
                <p>Kode Pos : 21876</p>
            </div>
            <div class="footer-section">
                <h3>Sosial</h3>
                <p><b>Youtube : </b>Re Revina</p>
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


