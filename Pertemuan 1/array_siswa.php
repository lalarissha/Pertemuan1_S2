<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01102', 'uts' => 70, 'uas' => 50, 'tugas' => 88];
$ns3 = ['id' => 3, 'nim' => '01103', 'uts' => 60, 'uas' => 86, 'tugas' => 98];
$ns4 = ['id' => 4, 'nim' => '01104', 'uts' => 90, 'uas' => 99, 'tugas' => 68];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>
<h3>Daftar Nilai Siswa</h3>
<table border="1" widht="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns){
            echo "<tr>";
            echo "<td>$nomor</td>";
            echo '<td>' . $ns1['nim'] . '</td>';
            echo '<td>' . $ns2['uts'] . '</td>';
            echo '<td>' . $ns3['uas'] . '</td>';
            echo '<td>' . $ns4['tugas'] . '</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
            echo "</tr>";
            $nomor++;
        }
    ?>
    </tbody>
    </table>
    