<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Bangun Datar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input, button {
            margin: 10px 0;
            padding: 8px;
            width: 100%;
        }
        button {
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        button:hover {
            background-color: #45a049;
        }
        h1, h3 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kalkulator Luas</h1>
    
    <!-- Persegi -->
    <h3>Luas Persegi</h3>
    <input type="number" id="sisi" placeholder="Masukkan panjang sisi">
    <button onclick="hitungLuasPersegi()">Hitung</button>
    <p id="hasilPersegi"></p>

    <!-- Persegi Panjang -->
    <h3>Luas Persegi Panjang</h3>
    <input type="number" id="panjang" placeholder="Masukkan panjang">
    <input type="number" id="lebar" placeholder="Masukkan lebar">
    <button onclick="hitungLuasPersegiPanjang()">Hitung</button>
    <p id="hasilPersegiPanjang"></p>

    <!-- Lingkaran -->
    <h3>Luas Lingkaran</h3>
    <input type="number" id="jariJari" placeholder="Masukkan jari-jari">
    <button onclick="hitungLuasLingkaran()">Hitung</button>
    <p id="hasilLingkaran"></p>

    <!-- Segitiga -->
    <h3>Luas Segitiga</h3>
    <input type="number" id="alas" placeholder="Masukkan panjang alas">
    <input type="number" id="tinggi" placeholder="Masukkan tinggi">
    <button onclick="hitungLuasSegitiga()">Hitung</button>
    <p id="hasilSegitiga"></p>

    <!-- Trapesium -->
    <h3>Luas Trapesium</h3>
    <input type="number" id="a" placeholder="Masukkan panjang sisi a">
    <input type="number" id="b" placeholder="Masukkan panjang sisi b">
    <input type="number" id="tinggiTrapesium" placeholder="Masukkan tinggi">
    <button onclick="hitungLuasTrapesium()">Hitung</button>
    <p id="hasilTrapesium"></p>
</div>

<script>
    // Luas Persegi
    function hitungLuasPersegi() {
        let sisi = document.getElementById('sisi').value;
        let luas = sisi * sisi;
        document.getElementById('hasilPersegi').innerHTML = "Luas Persegi: " + luas + " satuan²";
    }

    // Luas Persegi Panjang
    function hitungLuasPersegiPanjang() {
        let panjang = document.getElementById('panjang').value;
        let lebar = document.getElementById('lebar').value;
        let luas = panjang * lebar;
        document.getElementById('hasilPersegiPanjang').innerHTML = "Luas Persegi Panjang: " + luas + " satuan²";
    }

    // Luas Lingkaran
    function hitungLuasLingkaran() {
        let jariJari = document.getElementById('jariJari').value;
        let luas = Math.PI * jariJari * jariJari;
        document.getElementById('hasilLingkaran').innerHTML = "Luas Lingkaran: " + luas.toFixed(2) + " satuan²";
    }

    // Luas Segitiga
    function hitungLuasSegitiga() {
        let alas = document.getElementById('alas').value;
        let tinggi = document.getElementById('tinggi').value;
        let luas = 0.5 * alas * tinggi;
        document.getElementById('hasilSegitiga').innerHTML = "Luas Segitiga: " + luas + " satuan²";
    }

    // Luas Trapesium
    function hitungLuasTrapesium() {
        let a = document.getElementById('a').value;
        let b = document.getElementById('b').value;
        let tinggi = document.getElementById('tinggiTrapesium').value;
        let luas = 0.5 * (parseFloat(a) + parseFloat(b)) * tinggi;
        document.getElementById('hasilTrapesium').innerHTML = "Luas Trapesium: " + luas + " satuan²";
    }
</script>

</body>
</html>