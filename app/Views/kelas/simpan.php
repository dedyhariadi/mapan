<div class="container border shadow p-3 mb-5 mt-4 bg-white rounded">
    <h1 class="text-center">Data Kelas</h1>

    <?php
    $attributes_label = ['class' => 'col-form-label'];

    echo form_open();
    ?>


    <!-- awal satu baris entry nama kelas -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Nama Kelas', 'namaKelas', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            $data = [
                'name'      => 'namaKelas',
                // 'placeholder'     => 'entry kelas',
                'maxlength' => '100',
                'size'      => '50',
                'style'     => 'width:60%',
                'class'     => 'form-control'
            ];
            echo form_input($data);
            ?>
        </div>
    </div>
    <!-- akhir baris nama kelas -->


    <!-- awal satu baris entry angkatan -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Angkatan', 'angkatan', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            $data = [
                'name'      => 'angkatan',
                // 'placeholder'     => 'entry kelas',
                'maxlength' => '3',
                'size'      => '5',
                'style'     => 'width:14%',
                'class'     => 'form-control'
            ];
            echo form_input($data);
            ?>
        </div>
    </div>
    <!-- akhir baris angkatan -->


    <!-- awal satu baris entry jenis order -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Jenis Pesanan', 'jenisOrder', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php


            foreach ($jenisOrder as $jenisOrders) :
                $jenisPesanan[$jenisOrders['idJenisOrder']] = $jenisOrders['nama'];
            endforeach;

            echo form_dropdown('jenisOrderId', $jenisPesanan, '', 'class="custom-select menupilih"');

            ?>
        </div>
    </div>
    <!-- akhir baris jenis Order -->


    <!-- awal satu baris kertas -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Warna Kertas', 'kertas', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php

            foreach ($kertas as $kertass) :
                $isiKertas[$kertass['idKertas']] = $kertass['warnaKertas'];
            endforeach;

            echo form_dropdown('kertas', $isiKertas, '', 'class="custom-select menupilih"');
            ?>
        </div>
    </div>
    <!-- akhir baris Kertas -->

    <!-- awal satu baris entry ketua -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Ketua', 'ketua', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php

            foreach ($pasis as $pasiss) :
                $isiPasis[$pasiss['idPasis']] = $pasiss['nama'];
            endforeach;

            echo form_dropdown('pasisId', $isiPasis, '', 'class="custom-select menupilih"');
            ?>
        </div>
    </div>
    <!-- akhir baris Ketua -->

    <!-- awal baris Tgl ukur awal -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Tgl Ukur Awal', 'tglUkurAwal', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            helper('fungsiku');

            $data = [
                'name'      => 'angkatan',
                // 'placeholder'     => 'entry kelas',
                'maxlength' => '3',
                'size'      => '5',
                'style'     => 'width:14%',
                'class'     => 'form-control'
            ];

            echo form_input('tglUkurAwal', ctktanggal(date('dmy')), ['class' => 'form-control tglpicker']); ?>

        </div>
        <!-- akhir baris Tgl ukur awal -->

    </div>
    <!-- akhir baris Tgl ukur awal -->

    <!-- awal baris submit -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            echo form_submit('mysubmit', 'Simpan !', ['class' => 'btn btn-primary']);
            ?>
        </div>
        <!-- akhir baris Tombol -->

        <?= form_close(); ?>
    </div>
</div>