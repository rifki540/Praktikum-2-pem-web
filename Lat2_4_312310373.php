<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi</title>
    <script>
        function validateForm() {
            var nama = document.forms["input"]["nama"].value;
            if (nama == "") {
                alert("Nama harus diisi!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<FORM ACTION="proses02.php" METHOD="POST" NAME="input" onsubmit="return validateForm()">
    Nama Anda : <input type="text" name="nama">
    </br>
    <input type="submit" name="Input" value="Input">
</FORM>

</body>
</html>