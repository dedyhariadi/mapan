<div class="container border shadow p-3 mb-5 mt-4 bg-white rounded">
    <h1 class="text-center">Simpan pasis</h1>

    <?php
    $attributes_label = ['class' => 'col-form-label'];

    echo form_open();
    ?>

    <!-- awal satu baris entry nama pasis -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Nama Pasis', 'nama', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            $data = [
                'name'      => 'nama',
                // 'placeholder'     => 'entry kelas',
                'maxlength' => '100',
                'size'      => '50',
                'style'     => 'width:60%',
                'class'     => 'form-control',
                'autocomplete' => 'off'
            ];

            // if ($idKelas != '') :
            //     foreach ($kelas as $kelass) :
            //         if ($kelass['idKelas'] == $idKelas) :
            //             $data += ['value' => $kelass['namaKelas']];
            //         endif;
            //     endforeach;
            // endif;

            echo form_input($data);
            ?>
        </div>
    </div>
    <!-- akhir baris nama pasis -->


    <!-- awal satu baris entry telepon -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Telepon', 'telepon', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            $data = [
                'name'      => 'telepon',
                // 'placeholder'     => 'entry kelas',
                'maxlength' => '14',
                'size'      => '5',
                'style'     => 'width:40%',
                'class'     => 'form-control',
                'autocomplete' => 'off'
            ];


            echo form_input($data);
            ?>
        </div>
    </div>
    <!-- akhir baris telepon -->


    <!-- awal satu baris entry gender -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Gender', 'gender', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php


            // foreach ($jenisOrder as $jenisOrders) :
            //     $jenisPesanan[$jenisOrders['idJenisOrder']] = $jenisOrders['nama'];
            // endforeach;
            $gender = [
                'P' => 'Pria',
                'W' => 'Wanita'
            ];

            // if ($idKelas != '') :
            //     foreach ($kelas as $kelass) :
            //         if ($kelass['idKelas'] == $idKelas) :
            //             $jenisOrderPilih = $kelass['jenisOrderId'];
            //         endif;
            //     endforeach;
            // endif;

            echo form_dropdown('gender', $gender, isset($genderPilih) ? $genderPilih : '', ['class' => 'custom-select',  'style' => 'width:40%']);

            ?>
        </div>
    </div>
    <!-- akhir baris gender -->

    <!-- awal satu baris entry sepatu -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?php
            $data = [
                'name'      => 'sepatu',
                'placeholder' => 'Ukuran sepatu',
                'maxlength' => '2',
                'size'      => '5',
                'style'     => 'width:85%',
                'class'     => 'form-control',
                'autocomplete' => 'off'
            ];
            echo form_input($data);
            ?>
        </div>
        <div class="col-2 ml-0 px-0">
            <?php
            $data = [
                'name'      => 'kaos',
                'placeholder' => 'Ukuran Kaos',
                'maxlength' => '3',
                'size'      => '5',
                'style'     => 'width:85%',
                'class'     => 'form-control',
                'autocomplete' => 'off'
            ];


            echo form_input($data);
            ?>

        </div>
        <div class="col-2 ml-0 px-0">
            <?php
            $data = [
                'name' => 'topi',
                'placeholder' => 'topi',
                'maxlength' => '2',
                'size' => '5',
                'style' => 'width:80%',
                'class' => 'form-control',
                'autocomplete' => 'off'
            ];


            echo form_input($data);
            ?>
        </div>


    </div>
    <!-- akhir baris sepatu -->


    <!-- awal satu baris entry baju -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Ukuran Baju PDH', 'bajuPdh', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            $data = [
                'name'      => 'ukuranBaju',
                'size'      => '5',
                'style'     => 'width:80%',
                'class'     => 'form-control',
                'autocomplete' => 'off'
            ];

            echo form_input($data);
            ?>

        </div>
    </div>
    <!-- akhir baris baju -->


    <!-- awal satu baris entry celana -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
            <?= form_label('Ukuran Celana PDH', 'clanaPdh', $attributes_label); ?>
        </div>
        <div class="col-4 ml-0 px-0">
            <?php
            $data = [
                'name'      => 'ukuranClana',
                'size'      => '5',
                'style'     => 'width:80%',
                'class'     => 'form-control',
                'autocomplete' => 'off'
            ];

            echo form_input($data);
            ?>
        </div>
    </div>
    <!-- akhir baris celana -->


    <!-- awal baris submit -->
    <div class="row mt-4">
        <div class="col-4">
        </div>
        <div class="col-2">
        </div>
        <div class="col-2 ml-0 px-0">
            <?php
            echo form_submit('mysubmit', 'Simpan !', ['class' => 'btn btn-primary']);
            ?>
        </div>
        <div class="col-2 ml-0 px-0">
            <?php

            echo anchor(base_url('kelas/detail')  . '/' . $idKelas, 'Daftar Kelas', ['class' => 'btn btn-success']);
            ?>
        </div>
        <!-- akhir baris Tombol -->

        <?= form_close(); ?>
    </div>
</div>