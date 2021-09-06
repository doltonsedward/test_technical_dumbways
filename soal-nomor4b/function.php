<?php

$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

function query($data) {
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {

    global $conn;
    $name = htmlspecialchars($data["name"]);
    $stok = htmlspecialchars($data["stok"]);
    $image = htmlspecialchars($data["image"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $category_id = htmlspecialchars($data["category_id"]);

    $query = "INSERT INTO books VALUES
                ('', '$name', '$stok', '$image', '$deskripsi', '$category_id')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM books WHERE id = $id");

    return mysqli_affected_rows($conn);
}