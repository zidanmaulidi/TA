<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatans')->insert([
            [
                'id' => 1,
                'kegiatan' => 'Bakti Sosial Pembersihan Lingkungan',
                'waktu' => '2024-05-01',
                'lokasi' => 'Taman RW 02',
                'peserta' => 'Penduduk RW 02, Anggota Karang Taruna',
                'agenda' => 'Kegiatan bakti sosial ini bertujuan untuk membersihkan lingkungan sekitar Taman RW 02 dari sampah dan memperindah taman. Selain itu, kegiatan ini juga merupakan sarana untuk mempererat hubungan antara penduduk RW 02 dan anggota Karang Taruna.'
            ],
            [
                'id' => 2,
                'kegiatan' => 'Pertemuan Rutin RW 02',
                'waktu' => '2024-05-02',
                'lokasi' => 'Balai RW 02',
                'peserta' => 'Ketua RW, Anggota RT, Penduduk RW 02',
                'agenda' => 'Pertemuan rutin untuk membahas berbagai hal terkait dengan perkembangan dan kebutuhan RW 02.'
            ],
            [
                'id' => 3,
                'kegiatan' => 'Pelatihan Keterampilan Kerajinan Tangan',
                'waktu' => '2024-05-03',
                'lokasi' => 'Rumah Tetangga RW 02',
                'peserta' => 'Warga RW 02 yang Berminat, Instruktur Kerajinan',
                'agenda' => 'Pelatihan untuk meningkatkan keterampilan dalam membuat kerajinan tangan dan membuka peluang usaha baru bagi warga.'
            ],
            [
                'id' => 4,
                'kegiatan' => 'Diskusi Keamanan Lingkungan',
                'waktu' => '2024-05-04',
                'lokasi' => 'Pos Keamanan RW 02',
                'peserta' => 'Ketua RW, Linmas, Penduduk RW 02',
                'agenda' => 'Diskusi untuk meningkatkan kesadaran akan keamanan lingkungan sekitar dan upaya pencegahan tindak kriminal.'
            ],
            [
                'id' => 5,
                'kegiatan' => 'Lomba Menanam Pohon',
                'waktu' => '2024-05-05',
                'lokasi' => 'Area Hijau RW 02',
                'peserta' => 'Anak-anak Sekolah, Orang Tua, Penduduk RW 02',
                'agenda' => 'Lomba untuk mengajak masyarakat berpartisipasi aktif dalam pelestarian lingkungan dengan menanam pohon.'
            ],
            [
                'id' => 6,
                'kegiatan' => 'Pengajian Rutin',
                'waktu' => '2024-05-06',
                'lokasi' => 'Musholla RW 02',
                'peserta' => 'Tokoh Agama, Penduduk RW 02',
                'agenda' => 'Acara pengajian rutin untuk meningkatkan keimanan dan kebersamaan warga RW 02.'
            ],
            [
                'id' => 7,
                'kegiatan' => 'Pelatihan Literasi Digital',
                'waktu' => '2024-05-07',
                'lokasi' => 'Kantor RW 02',
                'peserta' => 'Warga RW 02 yang Berminat, Instruktur Teknologi',
                'agenda' => 'Pelatihan untuk meningkatkan pengetahuan dan keterampilan digital warga dalam menghadapi perkembangan teknologi.'
            ],
            [
                'id' => 8,
                'kegiatan' => 'Pemutaran Film Pendidikan',
                'waktu' => '2024-05-08',
                'lokasi' => 'Lapangan RW 02',
                'peserta' => 'Anak-anak, Remaja, Orang Tua',
                'agenda' => 'Pemutaran film pendidikan untuk memberikan pengetahuan tambahan dan hiburan yang bermanfaat bagi masyarakat RW 02.'
            ],
            [
                'id' => 9,
                'kegiatan' => 'Posyandu Keliling',
                'waktu' => '2024-05-09',
                'lokasi' => 'Area Perumahan RW 02',
                'peserta' => 'Bidan, Petugas Kesehatan, Ibu-ibu Hamil dan Balita',
                'agenda' => 'Pemeriksaan kesehatan rutin bagi ibu hamil, bayi, dan balita di sekitar perumahan RW 02.'
            ],
            [
                'id' => 10,
                'kegiatan' => 'Senam Sehat Bersama',
                'waktu' => '2024-05-10',
                'lokasi' => 'Lapangan Olahraga RW 02',
                'peserta' => 'Penduduk RW 02, Instruktur Senam',
                'agenda' => 'Senam pagi bersama untuk meningkatkan kesehatan dan kebugaran jasmani serta mempererat tali persaudaraan antarwarga.'
            ]

        ]);
    }
}
