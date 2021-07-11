<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    // $sekolah = $data['sekolah'];
    // echo json_encode($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>List Mahasiswa</title>
</head>
<body> 
    <div class="container">
        <h1>List Mahasiswa</h1>
        <a href="<?php echo site_url('mahasiswa/insert') ?>" class="btn btn-primary btn-lg"><i class="fas fa-plus"></i>Tambah Data</a>
        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tambahData">Tambah</button> -->
        <table id="example" class="table table-striped table-bordered mt-2" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>NRP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>      
                <?php $no = 1; 
                foreach($mahasiswa as $m ) : ?>
                    <tr>
                        <td><?=$no++; ?></td>
                        <td><?=$m->nama; ?></td>
                        <td><?=$m->nrp; ?></td>
                        <td>
                            <a href="<?php echo site_url('mahasiswa/updateView/').$m->id ?>" class="btn btn-info btn-sm">Edit Data</a>
                            <a href="<?php echo site_url('mahasiswa/delete/').$m->id  ?>" class="btn btn-danger btn-sm">Delete Data</a>
                        </td>
                    </tr>  
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>NRP</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Modal -->
    <div id="tambahData" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="<?= site_url('mahasiswa/store'); ?>" method="post">
                    <?php echo site_url('welcome/addStudent') ?>
                    <?php echo site_url('mahasiswa/store') ?>
                    <div class="modal-body">
                        <input type="number" name="coba" id="">
                        <input type="hidden" name="nama" value="excel">
                        <input type="hidden" name="nrp" value="05151">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" data-dismiss="modal">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html> 