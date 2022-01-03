<!DOCTYPE html>

<?php
error_reporting(0);
setlocale(LC_ALL, 'id_ID.utf8');
?>

<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 215mm;
        height: 330mm; 
        padding:15mm;
    margin-top:2mm;
    margin-left:90mm;
    margin-right:10mm;
        margin-bottom: 10mm;
        border: 1pt #D3D3D3 solid;
        border-radius: 5pt;
    box-shadow: 0 0 5pt rgba(0, 0, 0, 0.1); 
    }
    .pagesatu {
        width: 215mm;
        height: 297mm;
        padding:16mm;
    margin-top:2mm;
    margin-left:90mm;
    margin-right:10mm;
        margin-bottom: 10mm;
        border: 1pt #D3D3D3 solid;
        border-radius: 5pt;
    box-shadow: 0 0 5pt rgba(0, 0, 0, 0.1); 
    }
    .subpage {
        padding: 5mm;
        border: 5pt ;
        height:299mm;
        outline: 16mm ;
    opacity: 1;
    }
    
    @page {
        size:F4;
        margin: 0;
    }
    @media print {
        html, body {
      margin: 0mm;
            width: 215mm;
            height: 297mm;        
        }
        .pagesatu {
            margin: initial;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
      background-image: important;
        }
        .page {
            margin: initial;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
      background-image: important;
        }
    }
  h1 {text-align: center;
    line-height : 0em;
  }
  h5 {font-size:12pt;
    text-align: center;
    line-height :0em;
  }

</style>

<html>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Absensi.xls");
    ?>
<body>
<a target="_blank" href="../absensi">KEMBALI</a>
<div class='book'>
  <font style='font-family: Times New Roman'>
  <div class='page'>
    
      <p align='center'><font size="6"><strong>Data Penggajian</strong></font></p>

      <br>
      <table align="center" border="1" width="90%">
        <thead>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Status Kehadiran</th>
                    <th>Keterangan</th>
        </thead>
        <tbody>
            
            <?php $nomor = 1; foreach ($data['absensi'] as $abs) :?> 
                    <tr>
                      <td><?php echo $nomor++?>.</td>
                      <td><?php echo $abs['tanggal']?></td>
                      <td><?php echo $abs['nik'] ?></td>
                      <td><?php echo $abs['nama_karyawan'] ?></td>
                      <td><?php echo $abs['status_kehadiran']?></td>
                      <td><?php echo $abs['keterangan'] ?></td>
            <?php endforeach ?>


        </tbody>
      </table>
      <br>
        
    </div>
  </div>
</div>
 
</body>
</html>