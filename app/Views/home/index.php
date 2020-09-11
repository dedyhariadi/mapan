<div class="container border shadow p-3 mb-5 mt-4 bg-white rounded">
    <h1 class="text-center">Daftar Kelas</h1>
    <a href="<?= base_url('kelas/tambah');  ?>" class="btn btn-primary">Tambah Kelas</a>
    <table class="table table-hover" id="tabelku">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jenis Order</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tgl Ukur</th>
                <th scope="col">Cetak Terakhir</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            helper('fungsiku');
            foreach ($kelas as $nomor => $kelass) :
            ?>
                <tr>
                    <td><?= $nomor + 1; ?></td>
                    <td><?= $kelass['namaKelas']; ?></td>
                    <td><?= $kelass['jenisOrderId']; ?></td>
                    <td><?= $kelass['angkatan']; ?></td>
                    <td>0 Siswa</td>
                    <td><?= ctktanggal($kelass['tglUkurAwal']); ?></td>
                    <td> Last Print</td>
                    <td>
                        <div class="text-success">progress</div>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>

</div>