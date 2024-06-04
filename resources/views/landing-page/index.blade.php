<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <style>
        /* Custom CSS for background colors */
        body {
            background-color: #f8f9fa;
            /* Light Gray */
        }

        .navbar {
            background-color: #ffffff;
            /* White */
        }

        .jumbotron {
            background-color: rgba(245, 158, 11, 255);
            /* Dark Gray */
            color: #ffffff;
            /* White */
        }

        footer.footer {
            background-color: #f8f9fa;
            /* Light Gray */
            color: #343a40;
            /* Dark Gray */
            padding-top: 20px;
            /* Add padding for better spacing */
            border-top: 1px solid #dee2e6;
            /* Light Gray border on top */
        }
    </style>
</head>

<body style="background-color: white">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">SI RW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#informasi">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kegiatan"> Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#StrukturModal">Struktur
                        Organisasi </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#keuanganModal">Keuangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#AduanModal">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#SuratModal">Pengajuan
                        Surat</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a href="/admin/login" class="btn" role="button"
                    style="color:white; background-color: rgba(245,158,11,255)">Login</a>
            </span>
        </div>
    </nav>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{-- modal keuangan --}}
    <div class="modal fade" id="keuanganModal" tabindex="-1" role="dialog" aria-labelledby="keuanganModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document"> <!-- Added 'modal-xl' class for extra large modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="keuanganModalLabel">Keuangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h1> Transparansi Data Keuangan</h1>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>tanggal</th>
                                        <th>Pemasukan</th>
                                        <th>keterangan</th>
                                        <th>Pengeluaran</th>
                                        <th>saldo</th>
                                        <!-- Add more columns as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keuangans as $data)
                                        <tr>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->uang_masuk }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>{{ $data->uang_keluar }}</td>
                                            <td>{{ $data->saldo_kas }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Kami Ada Untuk Melayani Yang Terbaik Untuk Masyarakat</h1>
            <p class="lead">RW O2 Desa Bunder</p>
        </div>
    </div>

    {{-- informasi --}}
    <h1 style="text-align: center; font-family: Arial, sans-serif; font-size: 36px; color: #333; text-shadow: 2px 2px 2px #ccc; margin-top: 50px;"
        id="informasi">INFORMASI</h1>
    <br><br>
    <div class="container-fluid" style="padding: 5S0px;">
        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: flex-start; border: 1px">
            @foreach ($informations as $information)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $information->thumbnail) }}" class="card-img-top"
                            alt="{{ $information->title }}" style="width:90%; height:350px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $information->title }}</h5>
                            <div class="card-text collapse multi-collapse"
                                id="multiCollapseExample{{ $information->id }}">
                                {!! $information->content !!}
                            </div>

                            <button type="button" class="btn btn-primary" data-toggle="collapse"
                                data-target="#multiCollapseExample{{ $information->id }}" aria-expanded="false"
                                aria-controls="multiCollapseExample{{ $information->id }}">
                                Baca Lebih Lanjut
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- kegiatan --}}
    <h1 style="text-align: center; font-family: Arial, sans-serif; font-size: 36px; color: #333; text-shadow: 2px 2px 2px #ccc; margin-top: 50px;"
        id="kegiatan">KEGIATAN</h1>
    <br><br>
    <div class="container-fluid" style="padding: 5S0px;">
        <div class="row">
            @foreach ($kegiatans as $kegiatan)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><?= $kegiatan->kegiatan ?></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Waktu: <?= $kegiatan->waktu ?></p>
                            <p class="card-text">Lokasi: <?= $kegiatan->lokasi ?></p>
                            <p class="card-text">Peserta: <?= $kegiatan->peserta ?></p>
                            <p class="card-text">Agenda: <?= $kegiatan->agenda ?></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    {{-- modal struktur organisasi --}}
    <div class="modal fade" id="StrukturModal" tabindex="-1" role="dialog" aria-labelledby="StrukturModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document"> <!-- Added 'modal-xl' class for extra large modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="StrukturModalLabel">Struktur Organisasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1 style="text-align: center; font-family: Arial, sans-serif; font-size: 36px; color: #333; text-shadow: 2px 2px 2px #ccc; margin-top: 50px;"
                        id="struktur">Struktur Organisasi</h1>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                    <div class="card-header">RW</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nama RW</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                    <div class="card-header">RT</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nama RT</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Sekretaris</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Sekretaris</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Bendahara</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Bendahara</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal form pengaduan --}}
    <div class="modal fade" id="AduanModal" tabindex="-1" role="dialog" aria-labelledby="AduanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document"> <!-- Added 'modal-xl' class for extra large modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AduanModalLabel">Aduan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="table-responsive">
                            <div class="container mt-5">
                                <h2>Form Pengaduan</h2>
                                <form action="/create" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_pengadu">Nama Pengadu</label>
                                        <input type="text" class="form-control" id="nama_pengadu"
                                            name="nama_pengadu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="aduan">Judul Aduan</label>
                                        <input type="text" class="form-control" id="aduan" name="aduan"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="isi_aduan">Isi Aduan</label>
                                        <textarea class="form-control" id="isi_aduan" name="isi_aduan" rows="5" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="bukti">Upload File:</label>
                                        <input type="file" class="form-control-file" id="bukti"
                                            name="bukti" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Model Pengajuan Surat --}}

    <div class="modal fade" id="SuratModal" tabindex="-1" role="dialog" aria-labelledby="SuratModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SuratModalLabel">Pengajuan Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="table-responsive">
                            <div class="container mt-5">
                                <h2>Form Pengajuan Surat</h2>
                                <form action="/create/surat" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="nama_pengaju">nama_pengaju</label>
                                        <input type="text" class="form-control" id="nama_pengaju"
                                            name="nama_pengaju" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="NIK">NIK</label>
                                        <input type="text" pattern="[0-9]*" class="form-control" id="NIK"
                                            name="NIK" required title="NIK hanya boleh berisi angka">
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir"
                                            name="tempat_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                            required>
                                    </div>
                                    <<div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="keperluan">Keperluan</label>
                                <textarea class="form-control" id="keperluan" name="keperluan" rows="5" required></textarea>
                            </div>
                            {{-- <div class="form-group">
                                            <label for="lampiran">Upload Lampiran:</label>
                                            <input type="file" class="form-control-file" id="lampiran"
                                                name="lampiran" required>
                                        </div> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

    {{-- footer --}}
    <footer class="footer bg-light mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Profile </h5>
                    <ul class="list-unstyled">
                        <li>
                            <p>RW 02 Desa Bunder, Kecamatan Wagir: Komitmen pada pelayanan masyarakat, pembangunan
                                berkelanjutan, dan gotong royong</p>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Alamat </h5>
                    <ul class="list-unstyled">
                        <li>
                            <p>RW 02 Desa Bunder, Desa Bunder, Kecamatan Wagir, Kabupaten Malang, Jawa Timur,
                                Indonesia.
                            </p>
                        </li>

                    </ul>
                </div>

                <div class="col-md-4">
                    <h5>Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li>telepon: <a href="#">089567482429</a></li>
                        <li>email: <a href="#">rw02bunder@gmail.com</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
    <footer class="footer bg-light mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">Sistem Informasi Rukun Warga Dusun Bunder &copy; kelompok 6</span>
            <br>
            <span class="text-muted">Kecamatan Wagir - Kabupaten Malang</span>
        </div>
    </footer>


</body>

</html>
<script>
    $(document).ready(function() {
        $('.multi-collapse').on('show.bs.collapse', function() {
            $('.multi-collapse').not(this).collapse('hide');
        });
    });
</script>
