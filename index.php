<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Antrian M/M/1</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body style="background-color:beige;">
        <div class="container pt-5">
            <div class="col">
                <div class="card  mt-8">
                    <div class="card-body">
                        <h5>Nama            : Nuramalia Putri</h5>
                        <h5>NIM             : 222101286</h5>
                        <h5>Prodi           : Teknik Informatika</h5>
                        <h5>Matkul          : Pemodelan dan Sistem</h5>
                        <h5>Dosen Pengampu  : Rega Rivaldi,S.Kom.</h5>
                        <hr>
                        <h2 class="card-title" align="center">Tugas Pemodelan dan Sistem</h2>
                        <h4>Soal :</h4>
                        <p><br>
                            UD ABC mengoperasikan satu buah pompa bensin dengan satu orang pekerja yaitu Ali. Rata – rata tingkat kedatangan kendaraan mengikuti distribusi poisson yaitu 15
                            kendaraan per jam. Ali dapat melayani rata – rata 25 kendaraan per jam. Jika asumsi
                            model sistem antrian yang digunakan adalah M/M/1, hitunglah:<br>
                            1. λ?<br>
                            2. μ?<br>
                            3. Tingkat intensitas (kegunaan) pelayanan.<br>
                            4. Jumlah rata – rata kendaraan yang diharapkan dalam sistem.<br>
                            5. Jumlah kendaraan yang diharapkan menunggu dalam antrian.<br>
                            6. Waktu yang diharapkan oleh setiap kendaraan selama dalam sistem (menunggu pelayanan).<br>
                            7. Waktu yang diharapkan oleh setiap kendaraan untuk menunggu dalam antrian.</p>
                            <hr>
                            <h4>Jawaban : </h4><br>
                            <form method="POST" action="">
                                <div class="mb-3 col-sm-2">
                                    <label for="nilai_lamda" class="form-label">Nilai λ :</label>
                                    <input type="number" name="nilai_lamda" class="form-control" id="nilai_lamda" placeholder="Masukkan Nilai λ">
                                </div>
                                <div class="mb-3 col-sm-2">
                                    <label for="nilai_miu" class="form-label">Nilai μ :</label>
                                    <input type="number" name="nilai_miu" class="form-control" id="nilai_miu" placeholder="Masukkan Nilai μ">
                                </div>
                                <input class="btn btn-primary" type="submit" name="submit" value="Hitung">
                            </form>

                            <?php
                            if(isset($_POST['submit'])){
                                // Mendapatkan input nilai-lamda dan nilai-miu dari user
                                $nilai_lamda = $_POST['nilai_lamda'];
                                $nilai_miu = $_POST['nilai_miu'];

                                // Menghitung tingkat intensitas kegunaan pelayanan
                                $intensitas_kegunaan = $nilai_lamda / $nilai_miu;

                                // Menghitung Jumlah rata-rata kendaraan yang diharapkan dalam sistem
                                $JRKS = $nilai_lamda / ($nilai_miu - $nilai_lamda);

                                // Menghitung Jumlah Kendaraan yang diharapkan menunggu dalam antrian
                                $JKMA = ($nilai_lamda * $nilai_lamda) / ($nilai_miu * ($nilai_miu - $nilai_lamda));

                                // Menghitung Waktu yang diharapkan Setiap Kendaraan Selama dalam Sistem (Menunggu Pelayanan)
                                $WMP = 1 / (($nilai_miu - $nilai_lamda) / 60);

                                // Menghitung Waktu yang diharapkan oleh setiap kendaraan untuk menunggu dalam antrian
                                $WMA = $nilai_lamda / ($nilai_miu * ($nilai_miu - $nilai_lamda) / 60);

                                // Menampilkan hasil jawaban dari semua perhitungan soal
                                echo "<hr>";
                                echo "<h2> Hasil Perhitungan : </h2>";
                                echo "Nilai λ : " . $nilai_lamda . "<br>";
                                echo "Nilai μ : " . $nilai_miu . "<br>";
                                echo "Tingkat Intensitas Kegunaan Pelayanan : " . $intensitas_kegunaan."<br>";
                                echo "Jumlah Kendaraan yang Berada dalam Sistem : " . $JRKS  . "  Kendaraan<br>";
                                echo "Jumlah Kendaraan yang Diharapkan Menunggu dalam Antrian : " . $JKMA  . "  Kendaraan<br>";
                                echo "Rata - Rata Waktu yang dibutuhkan Kendaraan untuk menunggu dalam sistem selama : " . $WMP  . "  Menit<br>";
                                echo "Rata - Rata Waktu yang dibutuhkan Kendaraan untuk menunggu dalam antrian selama : " . $WMA  . "  Menit<br>";
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="jquery/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>