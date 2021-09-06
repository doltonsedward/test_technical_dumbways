<?php

require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
$categories = query("SELECT * FROM categories");

$perpustakaan = query("SELECT books.id, categories.categories_name, books.name, books.stok, books.image, books.deskripsi FROM books INNER JOIN categories ON books.category_id = categories.id");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Test</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>  
    <div class="main">
        <div class="wrapper_books">
            <div class="btn_section">
                <button class="btn add b-radius-trendy"><a href="tambah.php">Tambah</a></button>
                <button class="btn delete b-radius-trendy" onclick="deleteData()">Hapus</button>
            </div>
            <?php foreach( $categories as $ctg ): ?>
                <h3><?php echo $ctg["categories_name"] ?></h3>
                <div class="list_books">
                        <?php foreach( $perpustakaan as $perpus ): ?>
                        
                            <div class="book">
                                <div class="image b-radius-trendy">
                                    <div class="btn_delete-onImg">
                                        <a class="b-radius-trendy" href="hapus.php?id=<?php echo $perpus["id"] ?>">Hapus</a>
                                    </div>
                                    <img src="<?php echo $perpus["image"] ?>" alt="">
                                </div>
                                <div class="name-n-stock_book d-flex-between">
                                    <p><strong><?php echo $perpus["name"] ?></strong></p>
                                    <p>Stock : <?php echo $perpus["stok"] ?></p>
                                </div>
                                <div class="d-flex-between">
                                    <button class="btn borrow b-radius-trendy <?php if ($perpus["stok"] == 0) { echo "disabled"; } else { echo ""; }  ?>">
                                        Pinjam
                                    </button>
                                    <button class="btn return b-radius-trendy">Kembalikan</button>
                                </div>
                            </div>
                    
                            <?php endforeach; ?>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="my-book">
        
    </div>
    <script src="script.js"></script>
</body>
</html>