<?php 
 //koneksi ke database
$conn = mysqli_connect("localhost", "root", "","majubersama");
  // nama host, username, password,nama database

function query($query)  {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
        }
    return $rows;
}


function tambahBeasiswa($data){
// ambil data dari setiap elemen dalam form
    global $conn;
    $judul_beasiswa = htmlspecialchars($data["judul_beasiswa"]);
    $kategori_pendaftar = htmlspecialchars($data["kategori_pendaftar"]);
    $deskripsi_beasiswa = htmlspecialchars($data["deskripsi_beasiswa"]);
    $tanggal_beasiswa = htmlspecialchars($data["tanggal_beasiswa"]);
    

// upload gambar
    $gambar_beasiswa = upload();
    if(!$gambar_beasiswa ) {
        return false;
    }

// query insert data
    $query = "INSERT INTO beasiswa
                VALUES
                ('','$judul_beasiswa','$kategori_pendaftar','$deskripsi_beasiswa','$gambar_beasiswa', '$tanggal_beasiswa')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar_beasiswa']['name'];
    $ukuranFile = $_FILES['gambar_beasiswa']['size'];
    $error = $_FILES['gambar_beasiswa']['error'];
    $tmpName = $_FILES['gambar_beasiswa']['tmp_name'];

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
            alert('yang anda upload bukan gambar!');
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

    move_uploaded_file($tmpName, '../image./beasiswa/'.$namaFileBaru);
    return $namaFileBaru;
}


function hapus($id_beasiswa) {
    global $conn;
    mysqli_query($conn, "DELETE FROM beasiswa WHERE id_beasiswa = $id_beasiswa");
    return mysqli_affected_rows($conn);
}

function ubah($data){
// ambil data dari setiap elemen dalam form
    global $conn;
    $id_beasiswa = $data["id_beasiswa"];
    $judul_beasiswa = htmlspecialchars($data["judul_beasiswa"]);
    $kategori_pendaftar = htmlspecialchars($data["kategori_pendaftar"]);
    $deskripsi_beasiswa = htmlspecialchars($data["deskripsi_beasiswa"]);
    $gambarLama = htmlspecialchars($_POST["gambarLama"]);
    $tanggal_beasiswa = htmlspecialchars($data["tanggal_beasiswa"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar_beasiswa']['error'] == 4){
        $gambar_beasiswa = $gambarLama;
    } else {
        $gambar_beasiswa = upload();
    }



// query insert data
    $query = "UPDATE beasiswa SET
                judul_beasiswa = '$judul_beasiswa',
                kategori_pendaftar = '$kategori_pendaftar',
                deskripsi_beasiswa = '$deskripsi_beasiswa',
                gambar_beasiswa = '$gambar_beasiswa',
                tanggal_beasiswa = '$tanggal_beasiswa'
                WHERE id_beasiswa = $id_beasiswa
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM beasiswa
                WHERE 
                judul_beasiswa LIKE '%$keyword%' OR
                deskripsi_beasiswa LIKE '%$keyword%'
        ";
        return query($query);
}


function urut(){
    $query = "SELECT * FROM beasiswa ORDER BY judul_beasiswa ASC";
            return query($query);
}


function total(){
    $query = "SELECT judul, (biaya_beasiswa*stock) AS totalUang
            FROM Barang
            ";
            return query($query);
}

function cariBiaya($biaya){
    $query = "SELECT * FROM beasiswa HAVING biaya_beasiswa > $biaya;";
            return query($query);
}

function cariKategori($kategori){
    $query = "SELECT * FROM beasiswa WHERE kategori_pendaftar IN ('$kategori');";
            return query($query);
}

function rekapan(){
    $query = "SELECT judul_beasiswa FROM beasiswa UNION 
                SELECT judul FROM lomba;";
            return query($query);
}

function gabungan(){
    $query = "CREATE VIEW rekapan AS SELECT 
            beasiswa.judul_beasiswa, 
            beasiswa.tanggal_beasiswa, 
            lomba.judul_lomba, 
            lomba.biaya_lomba 
            FROM
                beasiswa
            LEFT JOIN 
                lomba ON beasiswa.id_beasiswa = lomba.id_lomba;";
            return query($query);
}

function cariTanggal($tanggal1, $tanggal2){
    $query = "SELECT * 
            FROM beasiswa 
            WHERE tanggal_beasiswa >= CAST('$tanggal1' AS DATE) 
            AND tanggal_beasiswa <= CAST('$tanggal2' AS DATE);";
            return query($query);
}


function registrasi($data){
    global $conn;
    $username = strtolower(stripcslashes($data["username"]));
    $email = strtolower(stripcslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
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

?>
