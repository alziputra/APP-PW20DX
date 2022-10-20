<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url("ext/style.css"); ?>">
</head>

<body>

    <!-- bagian menu / tombol -->
    <nav></nav>

    <!-- bagian table -->
    <table>
        <!-- judul table -->
        <thead>
            <tr>
                <th style="width: 5%; ">No.</th>
                <th style="width: 10%; ">NPM</th>
                <th style="width: 30%; ">Nama</th>
                <th style="width: 15%; ">Telepon</th>
                <th style="width: 15%; ">Jurusan</th>
                <th style="width: 15%; ">Foto</th>
                <th style="width: 10%; ">Status</th>
            </tr>
        </thead>
        <!-- isi table -->
        <tbody>
            <!-- awal looping -->
            <?php
            //nilai awal "no"
            $no = 1;
            foreach ($hasil as  $record) {

                if ($record->status == "1") {
                    $status = "Aktif";
                } else {
                    $status = "Pasif";
                }
            ?>
                <tr <?php
                    if ($record->status == "1") { ?> class="bg_pink" <?php
                                                                    } else { ?> class="bg_putih" <?php
                                                                                                } ?>>


                    <td class="text-center"><?= $no; ?></td>
                    <td class="text-center"><?= $record->npm; ?></td>
                    <td><?= $record->nama; ?></td>
                    <td class="text-center"><?= $record->telepon; ?></td>
                    <td class="text-center"><?= $record->jurusan; ?></td>
                    <td class="text-center"><?= $record->foto; ?></td>
                    <td class="text-center"><?= $status; ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
            <!-- awal looping -->
        </tbody>
    </table>

</body>

</html>