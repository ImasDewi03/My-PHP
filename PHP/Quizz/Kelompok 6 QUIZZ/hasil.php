<?php
require_once 'cek-akses.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Quizz</title>
    </head>
    <body>
        <h1>Hasil Quizz Anda</h1>
        <?php
        $pdo = include "koneksi.php";
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $query = $pdo->prepare("SELECT * FROM hasil where id=:id");
            $query->execute(array('id' => $_GET['id']));
            $hasil = $query->fetch();
            if (!$hasil) {
                echo '<p>Hasil tidak ditemukan</p>';
            } else {
                // Tampilkan Skor
                echo '<h1>Selamat Skor Anda: '.$hasil['nilai'].'</h1>';
                echo '<h2>Detil Hasil Anda</h2>';
                echo '<ol>';
                $query2 = $pdo->prepare("SELECT hasil_jawaban.*, jawaban.deskripsi as jawab, pertanyaan.deskripsi as tanya
                FROM hasil_jawaban
                INNER JOIN jawaban ON jawaban.id=hasil_jawaban.id_jawaban
                INNER JOIN pertanyaan ON jawaban.id_pertanyaan=pertanyaan.id 
                WHERE id_hasil=:id_hasil");
                $query2->execute(array(
                    'id_hasil' => $hasil['id']
                ));
                while($data = $query2->fetch()) {
                    echo '<li>';
                    echo htmlentities($data['tanya']);
                    echo '<p>Jawaban: '. htmlentities($data['jawab']).'</p>';
                    if ($data['benar'] == 1) {
                        echo '<p style="color:green">Benar</p>';
                    } else {
                        echo '<p style="color:red">Salah</p>';
                    }
                    echo '</li>';
                }
                echo '</ol>';
            }
        }
        ?>
    </body>
</html> 