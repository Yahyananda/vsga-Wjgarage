<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/licon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>WJ GARAGE</title>
</head>

<body>
    <?php include 'navbar.php' ?>
    <!-- card testimoni -->
    <div class="container">
        <div class="row p-3">
            <h4 class="text-center">Testimoni</h4>
            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Testimoni
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Testimoni</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="testimoni_act.php" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="testimoni" class="form-label">Testimoni</label>
                                    <input type="text" class="form-control" name="testimoni" id="testimoni" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include "koneksi.php";
            $klien = mysqli_query($konek, "SELECT * FROM daftar_klien");
            ?>
            <?php foreach ($klien as $key => $value) { ?>
            <div class="col-lg-4">
                <div class="card mb-2">
                    <img src="https://img.freepik.com/free-vector/feedback-concept-illustration_114360-8355.jpg?t=st=1717693449~exp=1717697049~hmac=640e76b6ad74555840b942763c2cc6cc5401ffcbf9ba9ae532869521fdc5f6a7&w=740"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="bi bi-person"></i><?php echo $value['nama'] ?>
                        </h5>
                        <p class="card-text"><i class="bi bi-card-text"></i>
                            <?php echo $value['testimoni'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>