  <?php
include('koneksi.php');


$query="UPDATE pengguna SET nama =? , alamat =? , nohp =?  WHERE id =? ";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    $nama=$data['nama'];
    $alamat=$data['alamat'];
    $nohp=$data['nohp'];
    $id=$data['id'];

    mysqli_stmt_bind_param($stmt,'sssssi',$nama, $alamat, $nohp, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                    alert('Data berhasil diupdate');
                    window.location.href ='../../pengguna.php';
              </script>";
          

    } else {
        echo "<script>
                    alert('Data gagal ditambahkan')
                    window.location.href ='../../editpengguna.php?id=$id';
                    </script>";
       
    }

} else {
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}

?>