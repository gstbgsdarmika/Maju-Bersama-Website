<?php 
//Koneksi ke database majubersama
$conn = mysqli_connect("localhost", "root", "","majubersama");
// nama host, username, password,nama database


//function registrasi
function registrasi($data){
    global $conn;
    $username = strtolower(stripcslashes($data["username"]));
    $email = stripcslashes($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek email yang ingin didaftarkan
    $result = mysqli_query($conn, "SELECT email_admin FROM admin WHERE email_admin = '$email' ");
    if(mysqli_fetch_assoc($result) ){
        echo "<script>
            alert('email sudah terdaftar!');
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

    // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO admin VALUES('','$username', '$email', '$password')");

    return mysqli_affected_rows($conn);


}
?>