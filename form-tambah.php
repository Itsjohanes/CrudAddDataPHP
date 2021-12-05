<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Tambah</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>

</head>

<body>
    <script>
        swal("Silakan masukan data");
    </script>
    <?php

    $errorupload = "";
    $image_name = "";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $image_name    = addslashes($_FILES['fileToUpload']['name']);

            $uploadOk = 1;
        } else {
            $errorupload =  "File bukan gambar.";
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $errorupload = "File udh ada.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 1000000000) {
            $errorupload = "Gambar terlalu besar .";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $errorupload = "Hanya JPG, JPEG, PNG & GIF yang diizinkan.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                $errorupload = "Sorry, Terjadi error.";
            }
        }
    }






    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="container">
        <h2>
            <center>Form Tambah</center>
        </h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            x

            <div class="form-group">
                <label for="photo"> Photo </label> </br> <span class="error"> <?php echo $errorupload; ?> </span>
                <input type="file" name="fileToUpload" id="fileToUpload">

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </div>
        </form>
    </div>
    <?php

    ?>
    <!-- JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>