<div class="container border shadow p-3 mb-5 mt-4 bg-white rounded">
    <h1 class="text-center">Detail kelas</h1>
    <h4 class="text-center">
        <?php
        foreach ($kelas as $kelass) :
            echo $kelass['idKelas'] == $idKelas ? $kelass['namaKelas'] : '';
        endforeach;
        ?>
    </h4>

    <a href="<?= base_url('pasis/simpan') . '/' . $idKelas;  ?>" class="btn btn-primary">Tambah Siswa</a>
    <table class="table table-hover" id="tabelku">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Sepatu</th>
                <th scope="col">Kaos</th>
                <th scope="col">Topi</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            helper('fungsiku');
            ?>
            <tr onclick="window.open('','_self', 'location=yes,height=600,width=800,scrollbars=yes,status=yes');return false;">

                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> </td>
                <td>
                </td>
            </tr>
        </tbody>
    </table>
</div>