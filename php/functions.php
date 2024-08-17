<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "informatics_university");


function signUp($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    // membuat variabel $result yang berisikan antrian mysqli dengan data nama_pengguna dari variabel username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    // jika array associative mysqli berisikan variabel $result,
    if (mysqli_fetch_assoc($result)) {
        // maka tampilkan notifikasi popup Username sudah terdaftar
        echo "<script>
            alert('Username sudah terdaftar!');
        </script>";
        // dan mengembalikan nilai false ke function signUp
        return false;
    }

    // cek konfirmasi password
    // jika variabel $password tidak sama dengan (string maupun angka) dengan variabel $password2
    if ($password !== $password2) {
        // maka tampilkan notifikasi pop up Konfirmasi password salah
        echo "<script>
            alert('Konfirmasi Password Salah');
        </script>";
        // dan mengembalikan nilai false ke function signUp
        return false;
    }

    // ekripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan data pengguna baru ke database
    // mengambil data mysqli dari koneksi database $conn, masukkan ke dalam variabel user di mysql, dengan nilai: id=kosong(karena id autoincreament), varibel username, variabel password 
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    // kembalikan jumlah baris yang terpengaruh oleh query INSERT, dan hubungkan mysql dengan variabel conn
    return mysqli_affected_rows($conn);

    // mengembalikan nilai true ke function signUp/ menjalankan funtion signUp
    return 1;
}

function kirimData($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek nama sudah ada atau belum
    // membuat variabel $result yang berisikan antrian mysqli dengan data email dari variabel email
    $result = mysqli_query($conn, "SELECT nama FROM daftar_mahasiswa WHERE email = '$email'");
    // jika array associative mysqli berisikan variabel $result,
    if (mysqli_fetch_assoc($result)) {
        // maka tampilkan notifikasi popup email sudah terdaftar
        echo "<script>
            alert('Email sudah terdaftar!');
        </script>";
        // dan mengembalikan nilai false ke function signUp
        return false;
    }

    // cek konfirmasi password
    // jika variabel $password tidak sama dengan (string maupun angka) dengan variabel $password2
    if ($password !== $password2) {
        // maka tampilkan notifikasi pop up Konfirmasi password salah
        echo "<script>
            alert('Konfirmasi Password Salah');
        </script>";
        // dan mengembalikan nilai false ke function signUp
        return false;
    }

    // ekripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan data pengguna baru ke database
    // mengambil data mysqli dari koneksi database $conn, masukkan ke dalam variabel user di mysql, dengan nilai: id=kosong(karena id autoincreament), varibel nama, variabel password 
    mysqli_query($conn, "INSERT INTO daftar_mahasiswa VALUES('', '$nama', '$email', '$password')");
    // kembalikan jumlah baris yang terpengaruh oleh query INSERT, dan hubungkan mysql dengan variabel conn
    return mysqli_affected_rows($conn);

    // mengembalikan nilai true ke function signUp/ menjalankan funtion signUp
    return 1;
}
