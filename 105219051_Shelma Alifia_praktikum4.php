<!DOCTYPE html>
<html>
    <head>
        <title>105219051-Shelma Alifia-Praktikum 4</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h2>DATA KARYAWAN</h2>
        <?php
            abstract class Karyawan{
                public $nama;
                public $ttl;
                public $jenisKelamin;
                public $level;
                private $status;
                private $gaji;

                function setNama($nama){
                    $this->nama = $nama;
                }
                function setTtl($ttl){
                    $this->ttl = $ttl;
                }
                function setJenisKelamin($jenisKelamin){
                    $this->jenisKelamin = $jenisKelamin;
                }
                function setLevel($level){
                    $this->level = $level;
                }
                function setStatus($status){
                    $this->status = $status;
                }
                function setGaji($gaji){
                    $this->gaji = $gaji;
                }
                
                function getNama(){
                    return $this->nama;
                }
                function getTtl(){
                    return $this->ttl;
                }
                function getJenisKelamin(){
                    return $this->jenisKelamin;
                }
                function getLevel(){
                    return $this->level;
                }
                function getStatus(){
                    return $this->status;
                }
                function getGaji(){
                    return $this->gaji;
                }

                abstract protected function getName();
                abstract protected function getNameKaryawan($nama);
                
            }
            
            class Fulltime extends Karyawan {
                public $status = "Fulltime";

                protected function getName() {
                   return $this->$nama;
                }
            
                public function getNameKaryawan($nama) {
                   return $this->$nama;
                }

                function __construct ($nama, $ttl, $jenisKelamin, $level, $status){
                  $this->nama = $nama;
                  $this->ttl = $ttl;
                  $this->jenisKelamin = $jenisKelamin;
                  $this->level = $level;
                  $this->status = $status;

                    if ($this->level == "Senior"){
                    $this->gaji = 5000000;
                    }else if($this->level == "Amateur"){
                     $this->gaji = 3500000;
                    }else if ($this->level == "Junior"){
                     $this->gaji = 2000000;
                    }
                }
              
            }
            class Parttime extends Karyawan {

                public $status = "Parttime";
                protected function getName() {
                    return $this->$nama;
                 }
             
                 public function getNameKaryawan($nama) {
                    return $this->$nama;
                 }
                  function __construct ($nama, $ttl, $jenisKelamin, $level, $status)
                  {
                    $this->nama = $nama;
                    $this->ttl = $ttl;
                    $this->jenisKelamin = $jenisKelamin;
                    $this->level = $level;
                    $this->status = $status;

                    if ($this->level == "Senior"){
                        $this->gaji = 5000000/2;
                    }else if($this->level == "Amateur"){
                        $this->gaji = 3500000/2;
                    }else if ($this->level == "Junior"){
                        $this->gaji = 2000000/2;
                    }
                  }
            }

            $Karyawan1 = new Fulltime ("Shelma Alifia", "Bandung, 17 Februari 2001","Perempuan","Senior","Fulltime");
            $Karyawan2 = new Fulltime ("Delsa Agraeni", "Cilegon, 27 Juni 2001","Perempuan","Amateur","Fulltime");
            $Karyawan3 = new Parttime ("Riza Hanif", "Cilegon, 9 Desember 2000","Laki-laki","Senior","Parttime");
            $Karyawan4 = new Parttime ("Sekar Kayang", "Malang, 10 Februari 2001","Perempuan","Junior","Parttime");

            $listDataKaryawan = [$Karyawan1, $Karyawan2, $Karyawan3, $Karyawan4];
        ?>

        <table>
            <tr>
                <th>NAMA</th>
                <th>TEMPAT TANGGAL LAHIR</th>
                <th>JENIS KELAMIN</th>
                <th>LEVEL KARYAWAN</th>
                <th>STATUS</th>
                <th>GAJI KARYAWAN</th>
            </tr>

                <?php for($x=0;$x<count($listDataKaryawan);$x++){ ?>
                    <tr>
                        <td><?php echo $listDataKaryawan[$x]->nama;?> </td>
                        <td><?php echo $listDataKaryawan[$x]->ttl;?> </td>
                        <td><?php echo $listDataKaryawan[$x]->jenisKelamin;?> </td>
                        <td><?php echo $listDataKaryawan[$x]->level;?> </td>
                        <td><?php echo $listDataKaryawan[$x]->status;?> </td>
                        <td><?php echo $listDataKaryawan[$x]->gaji;?> </td>
                    </tr>
                    <?php } ?>

        </table>
    </body>
</html>