<body>
<style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>

<table class="tg">
    <tr class="table-header"><th>Nomodddr Urut Kartu</th><th>Nama Pasien</th><th>Tanggal Lahir</th><th>Alamat</th><th>Nomor HP</th><th>Status Peserta</th><th>Nomor Asuransi Kesehatan</th></tr>
    @foreach($pasien as $p)
    <tr>
    <td width="5%">{{ $p->id_registrasi }}</td>
    <td width="20%">{{ $p->nama_pasien }}</td>
    <td width="10%">{{ $p->tanggal_lahir_pasien }}</td>
    <td width="15%">{{ $p->alamat_pasien }}</td>
    <td width="10%">{{ $p->no_hp_pasien }}</td>
    <td width="5%">{{ $p->status_peserta }}</td>
    <td width="25%">{{ $p->no_kartu_kesehatan }}</td>
    @endforeach
</table>