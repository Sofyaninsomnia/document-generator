<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 5mm;
            font-size: 11px;
        }

        .header h3 {
            margin: 2px 0;
            font-size: 14px;
            text-align: center;
        }

        .header img {
            height: 50px;
            width: auto;
            margin-bottom: 5px;
        }

        .info-table {
            margin-bottom: 5px;
            width: 100%;
        }

        .info-table td {
            padding: 1px 0;
        }

        .info-table td:first-child {
            width: 100px;
            font-weight: bold;
        }

        .progress-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            font-size: 9px;
            margin-top: 5px;
        }

        .progress-table th,
        .progress-table td {
            border: 1px solid #000;
            padding: 2px;
            text-align: center;
            font-size: 12px;
            vertical-align: middle;
        }

        .progress-table th {    
            background-color: #f2f2f2;
        }

        .photo-cell {
            width: 100%;
            height: 120px;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .photo-cell img {
            max-width: 100%;
            max-height: 100%;
            width: 200px;
            height: 200px;
            display: block;
            margin: 0 auto;
        }

        .col-no { width: 5%; }
        .col-lokasi { width: 10%; }
        .col-kegiatan { width: 20%; }
        .col-progress { width: calc(65%/3); }
        .col-keterangan { width: 10%; }

        /* Improved Signature Section */
        .signature-wrapper {
            display: flex;
            justify-content: space-between;
            margin-top: 60px;
            width: 100%;
        }

        .signature-box {
            width: 15%;
            position: relative;
        }

        .signature-company {
            
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }

        .signature-line {
            width: 80%;
            border-top: 1px solid #000;
            margin: 30px auto 5px;
        }

        .signature-name {

            text-align: center;
            font-size: 13px;
            margin-top: 5px;
        }

        .signature-name u {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    @if ($data['kop_surat'])
                        <img src="{{ storage_path('app/public/' . $data['kop_surat']) }}" alt="Kop Surat">
                    @endif
                </td>
                <td style="text-align: center;">
                    <h3>DOKUMENTASI PEKERJAAN</h3>
                </td>
                <td style="width: 20%;">
                    @if ($data['logo_surat'])
                        <img src="{{ storage_path('app/public/' . $data['logo_surat']) }}" alt="Logo">
                    @endif
                </td>
            </tr>
        </table>
    </div>

    <!-- Information Table -->
    <table class="info-table">
        <tr>
            <td>Nama Pekerjaan</td>
            <td>: {{ $data['nama_pekerjaan'] }}</td>
        </tr>
        <tr>
            <td>Nomor SPK</td>
            <td>: {{ $data['nomor_spk'] }}</td>
        </tr>
        <tr>
            <td>Tanggal SPK</td>
            <td>: {{ $data['tanggal_spk'] }}</td>
        </tr>
    </table>

    <!-- Progress Table -->
    <table class="progress-table">
        <thead>
            <tr>
                <th class="col-no">No</th>
                <th class="col-lokasi">Lokasi</th>
                <th class="col-kegiatan">Uraian Kegiatan</th>
                <th class="col-progress">Progress 0%</th>
                <th class="col-progress">Progress 50%</th>
                <th class="col-progress">Progress 100%</th>
                <th class="col-keterangan">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($dokumen as $dok)
                <tr>
                    <td style="padding-top: 1cm">{{ $no++ }}</td>
                    <td>{{ $dok->lokasi }}</td>
                    <td>{{ $dok->kegiatan }}</td>
                    <td>
                        <div class="photo-cell">
                            <img src="{{ public_path('storage/' . $dok->file_00) }}" alt="Foto 0%">
                        </div>
                    </td>
                    <td>
                        <div class="photo-cell">
                            <img src="{{ public_path('storage/' . $dok->file_50) }}" alt="Foto 50%">
                        </div>
                    </td>
                    <td>
                        <div class="photo-cell">
                            <img src="{{ public_path('storage/' . $dok->file_100) }}" alt="Foto 100%">
                        </div>
                    </td>
                    <td>{{ $dok->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Improved Signature Section -->
    <div class="signature-wrapper">
        <!-- Tanda Tangan Kiri -->
        <div class="signature-box" style="float: left; text-align: left; margin-left: 10px;">
            <div class="signature-company">{{ $data['nama_perusahaan'] }}</div>
            <div class="signature-name">
                <u>Admin Manager</u>
            </div>
        </div>

        <!-- Tanda Tangan Kanan -->
        <div class="signature-box" style="float: right; text-align: right; margin-right: 10px;">
            <div class="signature-company">{{ $data['nama_vendor'] }}</div>
            <div class="signature-name">
                <u>Delap</u>
                <span>Pengawas</span>
            </div>
        </div>
    </div>
</body>
</html>
