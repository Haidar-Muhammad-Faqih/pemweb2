<?php
$arrayMahasiswa = [
    [
        'nama' => 'Haidar',
        'mata_kuliah' => 'Pemrograman Web 2',
        'nilai_uts' => 100,
        'nilai_uas' => 100,
        'nilai_tugas' => 100,
    ],[
        'nama' => 'Alvi',
        'mata_kuliah' => 'Basis Data',
        'nilai_uts' => 84,
        'nilai_uas' => 89,
        'nilai_tugas' => 93,
    ],[
        'nama' => 'Alex',
        'mata_kuliah' => 'Basis Data',
        'nilai_uts' => 84,
        'nilai_uas' => 89,
        'nilai_tugas' => 78,
    ],[
        'nama' => 'Salman',
        'mata_kuliah' => 'Bahasa Inggris',
        'nilai_uts' => 60,
        'nilai_uas' => 46,
        'nilai_tugas' => 88,
    ]
];
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <br><br>
			<h1 class="text-center">
				Nilai Mahasiswa
			</h1> 
            <br>
            <a href="form_nilai.php" class="btn btn-primary btn-md">
                Tambah Data
            </a>
            <br><br>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							No.
						</th>
						<th>
							Nama Mahasiswa
						</th>
						<th>
							Mata Kuliah
						</th>
						<th>
							Nilai UTS
						</th>
						<th>
							Nilai UAS
						</th>
						<th>
							Nilai Tugas
						</th>
                        <th>
                            Rata-rata
                        </th>
                        <th>
                            Grade
                        </th>
					</tr>
				</thead>
				<tbody>
                    <?php
                    $nomor = 1; 
                    foreach($arrayMahasiswa as $key => $value) : 
                    ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $value['nama']?></td>
                            <td><?= $value['mata_kuliah']?></td>
                            <td><?= $value['nilai_uts']?></td>
                            <td><?= $value['nilai_uas']?></td>
                            <td><?= $value['nilai_tugas']?></td>
                            <td><?= $rataRata = ($value['nilai_uts'] + $value['nilai_uas'] + $value['nilai_tugas']) / 3 ?></td>
                            <td>
                                <?php 
                                if($rataRata >= 85 && $rataRata <= 100){
                                    echo "A";
                                } elseif($rataRata >= 70 && $rataRata <= 84){
                                    echo "B";
                                } elseif($rataRata >= 56 && $rataRata <= 69){
                                    echo "C";
                                } elseif($rataRata >= 36 && $rataRata <= 55){
                                    echo "D";
                                } elseif($rataRata <= 35){
                                    echo "E";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
			</table>
		</div>
	</div>
</div>