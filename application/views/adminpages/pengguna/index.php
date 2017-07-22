<div id="page-wrapper">
    <div class="container-fluid">
        <h1><?php echo $title ?></h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?php echo site_url('pengguna/add') ?>" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Username</th>
                                    <th>Jabatan</th>
                                    <th>Level</th>
                                    <th width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            foreach ($pengguna as $key => $value) { ?>
                                <tr class="odd gradeX">
                                        <td align="center"><?php echo $i ?></td>
                                        <td><?php echo $value->username ?></td>
                                        <td><?php echo $value->jabatan ?></td>
                                        <td><?php echo $value->level ?></td>
                                        <td align="center"><a href="<?php echo site_url('pengguna/edit/'.$value->id.'') ?>"><span class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span></a> 
                                        <!-- <span>&nbsp;</span> -->
                                        <a href="<?php echo site_url('pengguna/del/'.$value->id.'') ?>" data-confirm="Apakah anda yakin untuk menghapus data ini?"><span class="btn btn-danger btn-xs"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </span></a></td>
                                    </tr>    
                            <?php $i++;
                            } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

                     
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

