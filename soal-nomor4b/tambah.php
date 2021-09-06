<?php
require 'function.php';


if ( isset($_POST["submit"]) ) {
    if ( tambah($_POST) > 0 ) {
        echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
             ";
    } else {
        echo "
                <script>
                    alert('data gagal ditambahkan');
                </script>
             ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <div class="wrapper_modal" id="wrap-modal">
        <div class="modal b-radius-trendy">
            <form method="post" class="form">
                <ul>
                    <li>
                        <label for="nama">Book Name: </label>
                        <input type="text" name="name" id="nama">
                    </li>
                        <li>
                        <label for="stok">Stok: </label>
                        <input type="text" name="stok" id="stok">
                    </li>
                    <li>
                        <label for="image">Image: </label>
                        <input type="text" name="image" id="image">
                    </li>
                    <li>
                        <label for="desc">Description: </label>
                        <input type="text" name="deskripsi" id="desc">
                    </li>
                    <li>
                        <label for="category">Category: </label>
                        <input type="text" name="category_id" id="category">
                    </li>
                    <li>
                        <button type="submit" name="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>