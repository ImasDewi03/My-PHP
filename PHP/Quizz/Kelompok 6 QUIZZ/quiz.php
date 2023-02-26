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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="quiz.php">Quizz</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="logout.php" class="tbl-pink">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <!-- Courses -->
        <section id="courses">
            <div class="kolom">
                <p>
                <h1>Start to Quizz </h1>
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
                Jawab : <input type="text" id="presiden"><br>
                <div id="presiden_response"></div>
                <br>
                </p>

                <p><label>5. Ibukota dari Jawa Timur ??</label><br>
                Jawab : <input type="text" id="ibukota"><br>
                <div id="ibukota_response"></div>
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


