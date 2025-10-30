<!-- <h1></h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>email</th>
        <th>phone</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach ($orang as $o) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $o['name']; ?></td>
            <td><?= $o['email']; ?></td>
            <td><?= $o['phone']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<br>

<a href="<?php echo BASEURL?>/home/about">Tentang Kami</a> -->

  <div class="container-fluid p-4">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0"><?= $judul; ?></h2>
              
            </div>
        </div>
    </div>
                