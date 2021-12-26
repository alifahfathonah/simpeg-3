<body>
<style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>

<h3 align="center">LAPORAN DATA PEGAWAI</h3>
<h3 align="center">YAYASAN PENDIDIKAN DAN PENGAJARAN KRISTEN</h3>
<hr>
<br><br>

<table class="tg">
    <tr class="table-header"><th>NAMA PEGAWAI</th><th>TTL</th><th>PENDIDIKAN TERAKHIR</th><th>NIP</th><th>JABATAN</th><th>PANGKAT</th><th>TMT TUGAS</th></tr>
    @foreach($datapegawai as $d)
    <tr>
    <td width="5%">{{ $d->nama_pegawai }}</td>
    <td width="20%">{{ $d->tempat_lahir }}, {{ tgl_indo($d->tgl_lahir) }}</td>
    <td width="10%">{{ $d->pendidikan_terakhir }}</td>
    <td width="15%">{{ $d->NIP }}</td>
    <td width="10%">{{ $d->nama_jabatan }}</td>
    <td width="5%">{{ $d->nama_pangkat }}</td>
    <td width="25%">{{ tgl_indo($d->tmt_tugas) }}</td>
    @endforeach
</table>
<br>
<p align="right">Manokwari, <?php echo date('d/m/y');?></p>
<br><br><br>
<p align="right">. . . . . . . . . . . . . . . . . .</p>