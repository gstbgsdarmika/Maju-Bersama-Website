<?php 
 //koneksi ke database
$conn = mysqli_connect("localhost", "root", "","majubersama");
  // nama host, username, password,nama database

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }
    return $rows;
}


function tambahLomba($data){
// ambil data dari setiap elemen dalam form
    global $conn;

    $judul_lomba = htmlspecialchars($data["judul_lomba"]);
    $kategori_pendaftar = htmlspecialchars($data["kategori_pendaftar"]);
    $deskripsi_lomba = htmlspecialchars($data["deskripsi_lomba"]);
    $biaya_lomba = htmlspecialchars($data["biaya_lomba"]);
    $tanggal_lomba = htmlspecialchars($data["tanggal_lomba"]);
    

// upload gambar
    $gambar_lomba = upload();
    if(!$gambar_lomba) {
        return false;
    }

// query insert data
    $query = "INSERT INTO lomba
                VALUES
                ('','$judul_lomba','$kategori_pendaftar','$deskripsi_lomba','$biaya_lomba','$gambar_lomba', '$tanggal_lomba')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar_lomba']['name'];
    $ukuranFile = $_FILES['gambar_lomba']['size'];
    $error = $_FILES['gambar_lomba']['error'];
    $tmpName = $_FILES['gambar_lomba']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if($error === 4 ) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstrensGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstrensGambar = explode('.', $namaFile);
    $ekstrensGambar = strtolower(end($ekstrensGambar));
    if( !in_array($ekstrensGambar, $ekstrensGambarValid)) {
            echo "<script>
            alert('yang anda upload bukan gambar cokk!');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diuplod
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstrensGambar;

    move_uploaded_file($tmpName, '../image./lomba/'.$namaFileBaru);
    return $namaFileBaru;
}


function hapus($id_lomba) {
    global $conn;
    mysqli_query($conn, "DELETE FROM lomba WHERE id_lomba = $id_lomba");
    return mysqli_affected_rows($conn);
}

function ubah($data){
// ambil data dari setiap elemen dalam form
    global $conn;
    $id_lomba = $data["id_lomba"];
    $judul_lomba = htmlspecialchars($data["judul_lomba"]);
    $kategori_pendaftar = htmlspecialchars($data["kategori_pendaftar"]);
    $deskripsi_lomba = htmlspecialchars($data["deskripsi_lomba"]);
    $biaya_lomba = htmlspecialchars($data["biaya_lomba"]);
    $gambarLama = htmlspecialchars($_POST["gambarLama"]);
    $tanggal_lomba = htmlspecialchars($data["tanggal_lomba"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar_lomba']['error'] == 4){
        $gambar_lomba = $gambarLama;
    } else {
        $gambar_lomba = upload();
    }



// query insert data
    $query = "UPDATE lomba SET
                judul_lomba = '$judul_lomba',
                kategori_pendaftar = '$kategori_pendaftar',
                deskripsi_lomba = '$deskripsi_lomba',
                biaya_lomba = '$biaya_lomba',
                gambar_lomba = '$gambar_lomba',
                tanggal_lomba = '$tanggal_lomba'
                WHERE id_lomba = $id_lomba
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM lomba
                WHERE 
                judul_lomba LIKE '%$keyword%' OR
                deskripsi_lomba LIKE '%$keyword%'
        ";
        return query($query);
}


function urut(){

    $query = "SELECT * FROM lomba ORDER BY judul_lomba ASC ";
            return query($query);
}


function cariBiaya($biaya){
    $query = "SELECT * FROM lomba HAVING biaya_lomba < ($biaya + 1);";
            return query($query);
}

function cariKategori($kategori){
    $query = "SELECT * FROM lomba WHERE kategori_pendaftar IN ('$kategori');";
            return query($query);
}

function rekapan(){
    $query = "SELECT judul_lomba FROM lomba UNION SELECT judul_lomba FROM lomba;";
            return query($query);
}

function gabungan(){
    $query = "CREATE OR REPLACE VIEW rekapan AS SELECT 
            beasiswa.judul_beasiswa, 
            beasiswa.tanggal_beasiswa, 
            lomba.judul_lomba, 
            lomba.tanggal_lomba 
            FROM
                beasiswa
            LEFT JOIN 
                lomba ON beasiswa.id_beasiswa = lomba.id_lomba;";
            return query($query);
}

function cariTanggal($tanggal1, $tanggal2){
    $query = "SELECT * FROM lomba 
            WHERE tanggal_lomba >= CAST('$tanggal1' AS DATE) 
            AND tanggal_lomba <= CAST('$tanggal2' AS DATE);";
            return query($query);
}


function registrasi($data){
    global $conn;
    $username = strtolower(stripcslashes($data["username"]));
    $email = strtolower(stripcslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result) ){
        echo "<script>
            alert('username sudah terdaftar!');
        </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    // // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database 
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);

}

function totalPost(){
    global $conn;
    $result = mysqli_query($conn,"SELECT COUNT(*) from
            (SELECT DISTINCT judul_lomba from lomba
            UNION
            SELECT DISTINCT judul_beasiswa from beasiswa) AS totalPost;"
            );
            $data=mysqli_fetch_assoc($result);
            echo $data['COUNT(*)'];
            }

?>
