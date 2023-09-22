<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Total Jam</title>
    <!-- Tambahkan tautan ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <style>
        /* CSS khusus untuk penataan tampilan */
        body {
            padding: 20px;
        }

        /* CSS untuk card input */
        .custom-card-input {
            background-color: #6B3E9E; /* Warna latar belakang ungu */
            color: yellow; /* Warna teks kuning */
            padding: 20px; /* Ruang dalam card input */
            border-radius: 10px; /* Sudut bulat */
        }

        /* CSS untuk tombol Submit */
        .custom-button {
            background-color: #FFA500; /* Warna latar belakang jingga */
            color: black; /* Warna teks hitam */
        }
        /* CSS untuk footer */
.footer {
    background-color: #333; /* Warna latar belakang dark grey */
    color: white; /* Warna teks putih */
    padding: 20px; /* Ruang dalam footer */
    border-radius: 10px; /* Sudut bulat */
}
/* CSS untuk tautan Instagram */
.instagram-link {
    color: #e4405f; /* Warna teks tautan Instagram */
    text-decoration: none; /* Hapus dekorasi tautan */
    border-radius: 10px; /* Sudut bulat */
}

/* Mengubah warna latar belakang saat tautan dihover */
.instagram-link:hover {
    background-color: #ffdb58; /* Warna latar belakang kuning saat hover */
    color: #000; /* Warna teks hitam saat hover */
    border-radius: 10px; /* Sudut bulat */
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Kalkulator Total Jam</h1>

        <!-- Card Bootstrap dengan kelas tambahan untuk penampilan kustom -->
        <div class="card custom-card-input">
            <div class="card-body">
                <div class="row">
                
                    <div class="col-md-3 mb-3">
                        <label for="input05Jam" class="form-label">Jam 0.5:</label>
                        <input type="number" id="input05Jam" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="input2Jam" class="form-label">Jam 2:</label>
                        <input type="number" id="input2Jam" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="input3Jam" class="form-label">Jam 3:</label>
                        <input type="number" id="input3Jam" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="input4Jam" class="form-label">Jam 4:</label>
                        <input type="number" id="input4Jam" class="form-control" required>
                    </div>
                    

                    <div class="col-md-3 mb-3">
                        <label for="input5Jam" class="form-label">Jam 5:</label>
                        <input type="number" id="input5Jam" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="input6Jam" class="form-label">Jam 6:</label>
                        <input type="number" id="input6Jam" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="input7Jam" class="form-label">Jam 7:</label>
                        <input type="number" id="input7Jam" class="form-control" required>
                    </div>
                </div>
                <button type="button" class="btn btn-primary custom-button mt-3" onclick="hitungTotalJam()">Submit Total Jam</button>

                <!-- Tombol Clear -->
                <button type="button" class="btn btn-danger custom-button mt-3" onclick="clearForm()">Clear</button>

                <!-- Tombol Kembali ke Halaman Utama -->
                <a href="index.html" class="btn btn-info custom-button mt-3">Kembali ke Halaman Utama</a>

                <div id="hasilTotalJam" class="mt-4">
                    <!-- Hasil perhitungan total jam akan muncul di sini -->
                </div>
            </div>
        </div>
    </div>
     <!-- Footer -->
     <div class="footer text-center">
        <p>Follow Instagram: <a href="https://www.instagram.com/cahyaeko_adiputro" target="_blank" class="instagram-link">@maslight</a></p>
        <p>&copy; 2023 maslight. Hak Cipta Dilindungi.</p>
    </div>

    <!-- Tambahkan tautan ke Bootstrap JavaScript (untuk fungsi Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

    <script>
        function hitungTotalJam() {
            var input05Jam = parseFloat(document.getElementById("input05Jam").value);
            var input2Jam = parseFloat(document.getElementById("input2Jam").value);
            var input3Jam = parseFloat(document.getElementById("input3Jam").value);
            var input4Jam = parseFloat(document.getElementById("input4Jam").value);
            var input5Jam = parseFloat(document.getElementById("input5Jam").value);
            var input6Jam = parseFloat(document.getElementById("input6Jam").value);
            var input7Jam = parseFloat(document.getElementById("input7Jam").value);


            var totalJam = (0.75 * input05Jam) + (9.5 * input5Jam) + (11.5 * input6Jam) + (13.5 * input7Jam);(3.5 * input2Jam) + (5.5 * input3Jam) + (7.5 * input4Jam);

            var hasilTotalJamElement = document.getElementById("hasilTotalJam");
            hasilTotalJamElement.innerHTML = "<strong>Total Jam:</strong> " + totalJam.toFixed(2) + " jam";
        }

        // Fungsi untuk membersihkan kolom input dan output
        function clearForm() {
            document.getElementById("input2Jam").value = "";
            document.getElementById("input3Jam").value = "";
            document.getElementById("input4Jam").value = "";
            document.getElementById("hasilTotalJam").innerHTML = "";
        }
    </script>
</body>
</html>
