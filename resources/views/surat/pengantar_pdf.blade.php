<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar</title>
    <style>
        @page {
            size: A4;
            /* Set page size to A4 */
            margin: 20mm;
            /* Set margins for better printing */
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .body {
            line-height: 1.5;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .footer-left {
            margin-left: 10px
        }

        .footer-right {

            text-align: justify;
        }

        .list-unstyled {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="/generate-pdf">p</a>
        <h3>SURAT PENGANTAR</h3>
        <p>DESA SIDORAHAYU, KECAMATAN WAGIR, DUSUN BUNDER</p>
        <p>RUKUN TETANGGA 010, RUKUN WARGA 002</p>
    </div>

    <div class="body">
        <p>Diberikan kepada:</p>
        <ul class="list-unstyled">
            <li><strong>Nama:</strong> Mia kidima Yuli widaRTI</li>
            <li><strong>NIK:</strong> 35072147079100.06</li>
            <li><strong>Tempat, Tgl Lahir:</strong> Malang, os-07-1991</li>
            <li><strong>Pekerjaan:</strong> swasta</li>
            <li><strong>Status:</strong> Kawin</li>
            <li><strong>Alamat:</strong> Dusun Bunder</li>
        </ul>
        <p><strong>Keperluan:</strong> minta Donosili</p>
        <br>
        <p>Demikian surat pengantar ini kami buat untuk dapat dipergunakan sebagaimana dimaksud</p>
    </div>
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
    <div class="footer">
        <div class="footer-left">
            <p style="margin-bottom: -5px">Mengetahui,</p>
            <p>Ketua RW 002</p>
            <br>
            <p>............................</p>
        </div>
        <div class="footer-right">
            <p id="tanggal" style="margin-bottom: -5px">Sidorahayu,</p>
            <p>Ketua RT 010</p>
            <br>
            <p>............................</p>
        </div>
    </div>

    <script>
        // Get the current date (same script as before)
    </script>
</body>

</html>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            /* Remove default body styles (background color, font, etc.) */
            background-color: #fff;
            font-family: sans-serif;
        }

        .card {
            width: 210mm;
            /* Set width to A4 size */
            height: 297mm;
            /* Set height to A4 size */
            margin: 0 auto;
            padding: 10mm;
            /* Adjust padding as needed */
            border: 1px solid #ccc;
            /* Add a border for better visibility */
        }

        .card-header {
            text-align: center;
        }

        .card-body {
            padding-top: 20px;
            /* Adjust padding-top for better content positioning */
        }

        .footer {
            display: flex;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .footer-left,
        .footer-right {
            flex: 1;
            /* Make footer-left and footer-right equally wide */
            text-align: justify;
            /* Adjust text alignment for better formatting */
        }

        .list-unstyled {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header text-center">
            <h3>SURAT PENGANTAR</h3>
            <p>DESA SIDORAHAYU, KECAMATAN WAGIR, DUSUN BUNDER</p>
            <p>RUKUN TETANGGA 010, RUKUN WARGA 002</p>
        </div>

        <div class="card-body">
            <p>Diberikan kepada:</p>
            <ul class="list-unstyled">
                <li><strong>Nama:</strong> Mia kidima Yuli widaRTI</li>
                <li><strong>NIK:</strong> 35072147079100.06</li>
                <li><strong>Tempat, Tgl Lahir:</strong> Malang, os-07-1991</li>
                <li><strong>Pekerjaan:</strong> swasta</li>
                <li><strong>Status:</strong> Kawin</li>
                <li><strong>Alamat:</strong> Dusun Bunder</li>
            </ul>
            <p><strong>Keperluan:</strong> minta Donosili</p>
            <br>
            <p>Demikian surat pengantar ini kami buat untuk dapat dipergunakan sebagaimana dimaksud.</p>
        </div>

        <div class="footer">
            <div class="footer-left">
                <p style="margin-bottom: -5px">Mengetahui,</p>
                <p>Ketua RW 002</p>
                <br>
                <p>............................</p>
            </div>
            <div class="footer-right">
                <p id="tanggal" style="margin-bottom: -5px">Sidorahayu,</p>
                <p>Ketua RT 010</p>
                <br>
                <p>............................</p>
            </div>
        </div>
    </div>

    <script>
        // Get the current date
        const today = new Date();

        // Get the day of the month
        const day = today.getDate();

        // Get the month
        const month = today.getMonth() + 1; // January is 0, so we add 1

        // Get the year
        const year = today.getFullYear();

        // Format the date string
        const formattedDate = `<span class="math-inline">\{day\}\-</span>{month --}}
