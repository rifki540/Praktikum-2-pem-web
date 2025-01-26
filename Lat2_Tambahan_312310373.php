<?php
$pegawai = [
    [
        'nama' => 'John Doe',
        'jabatan' => 'Manager',
        'gaji_pokok' => 8000000,
        'tunjangan' => 2000000
    ],
    [
        'nama' => 'Jane Smith',
        'jabatan' => 'Assistant Manager',
        'gaji_pokok' => 10000000,
        'tunjangan' => 3000000
    ],
    [
        'nama' => 'Alice Johnson',
        'jabatan' => 'Senior Developer',
        'gaji_pokok' => 7500000,
        'tunjangan' => 2500000
    ],
    [
        'nama' => 'Bob Brown',
        'jabatan' => 'Junior Developer',
        'gaji_pokok' => 5000000,
        'tunjangan' => 1500000
    ],
    [
        'nama' => 'Chris Lee',
        'jabatan' => 'Designer',
        'gaji_pokok' => 6500000,
        'tunjangan' => 2000000
    ]
];

$total_gaji_perusahaan = 0;
$gaji_tertinggi = 0;
$pegawai_gaji_tertinggi = '';

echo "===== Laporan Gaji Pegawai =====\n";
foreach ($pegawai as $data) {
    $gaji_total = $data['gaji_pokok'] + $data['tunjangan'];
    $total_gaji_perusahaan += $gaji_total;

    if ($gaji_total > $gaji_tertinggi) {
        $gaji_tertinggi = $gaji_total;
        $pegawai_gaji_tertinggi = $data['nama'];
    }

    echo "Nama Pegawai: " . $data['nama'] . "\n";
    echo "Jabatan: " . $data['jabatan'] . "\n";
    echo "Gaji Pokok: Rp" . number_format($data['gaji_pokok'], 0, ',', '.') . "\n";
    echo "Tunjangan: Rp" . number_format($data['tunjangan'], 0, ',', '.') . "\n";
    echo "Gaji Total: Rp" . number_format($gaji_total, 0, ',', '.') . "\n";
    echo "-----------------------------\n";
}

echo "\n===== Ringkasan =====\n";
echo "Total Gaji Perusahaan: Rp" . number_format($total_gaji_perusahaan, 0, ',', '.') . "\n";
echo "Pegawai dengan Gaji Tertinggi: " . $pegawai_gaji_tertinggi . "\n";
echo "Gaji Tertinggi: Rp" . number_format($gaji_tertinggi, 0, ',', '.') . "\n";
?>