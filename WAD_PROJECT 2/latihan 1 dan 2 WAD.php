<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 1 PHP</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <h2>Hitung Angka</h2>
    <form method="post" action="memproses angka.php">
        <label for="angka">Menginputkan Angka 1:</label>
        <input type="text" name="angka" id="angka" required><br><br>
    
    <form method="post" action="memproses angka.php">
        <label for="angka">Menginputkan Angka 2:</label>
        <input type="text" name="angka" id="angka" required><br><br>

        <label for="pilihan">Pilih sesuatu:</label>
        <select name="pilihan" id="pilihan">
            <option value="angka ke 1 ">Tambah</option>
            <option value="angka ke 2">Kali</option>
            <option value="angka ke 3">Bagi</option>
        </select><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
    