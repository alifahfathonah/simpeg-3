<body>
<style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;;padding:3px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-weight:normal;padding:3px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg .tg-3wr7{font-weight:bold;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
<p align="center"><img src="logo.jpg" width="90" height="90"><br>
<font size="3"><b>
YAYASAN PENDIDIKAN DAN PERSEKOLAHAN KATOLIK KEUSKUPAN MANOKWARI-SORONG (YPPK-KMS)<br>
KEPUTUSAN PENGURUS SEKOLAH WILAYAH YPPK-KMS WILAYAH MANOKWARI<br>NOMOR : {{$sk->no_surat_tugas}}<br>TENTANG PENETAPAN TENAGA HONORER PADA {{$sk->tempat_tugas}}<br>KEPUTUSAN PENGURUS SEKOLAH WILAYAH YPPK-KMS WILAYAH MANOKWARI</p><hr></b></font>
<br>
<table class="tg">
    <tr valign="top"><th width="14%" valign="top"> <font size="3">Menimbang</th><th width="1%">:</th><th width="1%">1.</th><th valign="top">Bahwa untuk kelancaran proses belajar mengajar pada {{$sk->tempat_tugas}} perlu ada tenaga guru yang memadai</th></tr>
    <tr class="table-header"><th></th><th></th><th>2.</th><th valign="top">Bahwa untuk menanggulangi kekurangan tenaga guru pada {{$sk->tempat_tugas}} maka perlu adanya tenaga honorer</th></tr>
    <tr valign="top"><th></th><th></th><th>3.</th><th valign="top">Bahwa untuk maksud tersebut pada poin 1 dan 2 di atas perlu diatur dan ditetapkan dengan surat keputusan.</th></tr>
    <tr valign="top"><th>Mengingat</th><th>:</th><th>1.</th><th valign="top">Anggaran Dasar dan Rumah Tangga YPPK Keuskupan Manokwari Sorong</th></tr>
    <tr valign="top"><th></th><th>:</th><th>2.</th><th valign="top">Peraturan Kepegawaian Keuskupan Manokwari Tahun 1998</th></tr>
    <tr><th colspan="4" align="center"><b>MEMUTUSKAN</b></th></tr>
    <tr valign="top"><th>Menetapkan</th><th></th><th></th><th></th></tr>
    <tr valign="top"><th>PERTAMA</th><th>:</th><th colspan="2" valign="top">Tenaga Guru Honorer pada {{$sk->tempat_tugas}} </th></tr>
    <tr valign="top"><th>KEDUA</th><th>:</th><th colspan="2" valign="top">Bahwa Sdr. <b>{{$sk->nama_pegawai}}</b> dipekerjakan sebagai tenaga honorer pada {{ $sk->tempat_tugas }} terhitung mulai tanggal {{tgl_indo($sk->tmt_tugas)}} dengan upah / honor sesuai dengan peraturan yang berlaku.</th></tr>
    <tr valign="top"><th>KETIGA</th><th>:</th><th colspan="2" valign="top">Segala biaya yang ditimbulkan sebagai akibat ditetapkan keputusan ini dibebankan pada sekolah {{ $sk->tempat_tugas }}</th></tr>
    <tr valign="top"><th>KEEMPAT</th><th>:</th><th colspan="2" valign="top">Apabila dikemudian hari ternyata terdapat kekeliruan dalam keputusan ini akan diadakan perbaikan sebagaimana mestinya.</th></tr>    
</table>
<table>
        <td width="65%">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
        <td width="35%"><p align="center">Ditetapkan di Manokwari <br> Pada Tanggal <?php echo date('d/m/y');?><br>
        PSW YPPK KMS WILAYAH MANOKWARI
        <br><br><br>
        <p align="center"><u><b>

        <?php
        $ttd = \DB::table('data_pegawais')
                    ->join('jabatans','jabatans.id_jabatan','=','data_pegawais.id_jabatan')
                    ->where('jabatans.nama_jabatan','=','PSW YPPK KMS WILAYAH MANOKWARI')
                    ->get();
        foreach($ttd as $row){
        echo $row->nama_pegawai;
        }
        ?><br></u>Ketua</b></u></p>
        </td>
        </font>
</table>
<u>Tembusan Kepada Yth :</u><br>
1. Kepala Dinas Pendidikan dan Pengajaran Kabupaten Manokwari<br>
2. Ketua Badan Pengurus YPPK KMS<br>
3. Ketua Tim Pastoral Wilayah Manokwari<br>
4. Pengawas TK/SD/SMP/SMA Dinas Pendidikan dan Pengajaran Kabupaten Manokwari<br>
5. Arsip