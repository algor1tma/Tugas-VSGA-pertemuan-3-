<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Group with Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Background color for the page */
            padding: 20px; /* Padding around the content */
        }
        .container {
            background-color: #ffffff; /* Background color for the form container */
            padding: 20px; /* Padding inside the form container */
            border-radius: 8px; /* Rounded corners for the form container */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Box shadow for a subtle depth */
            max-width: 500px; /* Maximum width of the form */
            margin: auto; /* Center the form horizontally */
        }
        h2 {
            text-align: center; /* Center-align the heading */
            margin-bottom: 20px; /* Bottom margin for the heading */
        }
        .form-label {
            font-weight: bold; /* Bold font weight for labels */
        }
        .form-control {
            margin-bottom: 15px; /* Bottom margin for form controls */
        }
        .btn-primary {
            width: 100%; /* Full width button */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Selamat datang</h2>
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" required>
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin" required>
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
