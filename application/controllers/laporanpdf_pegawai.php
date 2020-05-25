<?php
Class Laporanpdf_pegawai extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index(){
        $pdf = new FPDF('l','mm',array(300,530));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(500,7,'LAPORAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(500,7,'Laporan Tabel Pegawai',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'No',1,0,'C');
        
        $pdf->Cell(27,6,'Nama Pegawai',1,0,'C');
        $pdf->Cell(26,6,'NIP',1,0,'C');
        $pdf->Cell(28,6,'Tempat Lahir',1,0,'C');
        $pdf->Cell(30,6,'Tanggal Lahir',1,0,'C');
        $pdf->Cell(32,6,'Jenis Kelamin',1,0,'C');
        
        $pdf->Cell(36,6,'Status Perkawinan',1,0,'C');
        $pdf->Cell(38,6,'Status Pegawai',1,0,'C');
        $pdf->Cell(40,6,' Nama Jabatan',1,0,'C');
        $pdf->Cell(42,6,'Nama Bidang',1,0,'C');
        $pdf->Cell(44,6,'Agama',1,0,'C');
        $pdf->Cell(46,6,'Alamat',1,0,'C');
        $pdf->Cell(48,6,'No KTP',1,0,'C');
        
        $pdf->Cell(54,6,'Email',1,0,'C');
        


        $pdf->SetFont('Arial','',10);


        $this->db->select('tb_pegawai.id_pegawai AS id_pegawai,nama,nip,nama_jabatan,nama_bidang,tempat_lahir,tanggal_lahir,jenis_kelamin,pendidikan_terakhir,status_perkawinan,status_pegawai,agama,alamat,no_ktp,no_rumah,no_handphone,email,tanggal_pengangkatan');
        $this->db->from('tb_pegawai');
        $this->db->join('tb_bidang', 'tb_bidang.id_bidang = tb_pegawai.id_bidang', 'left');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_pegawai.id_jabatan', 'left');
        $Pegawai = $this->db->get()->result();
        $no = 1;
        foreach ($Pegawai as $row){
          $pdf->cell(10,6,'',0,1);
          $pdf->cell(20,6,$no,1,0,'C');
            
            $pdf->Cell(27,6,$row->nama,1,0,'C');
            $pdf->cell(26,6,$row->nip,1,0,'C');
            $pdf->cell(28,6,$row->tempat_lahir,1,0,'C');
            
            $pdf->cell(32,6,$row->tanggal_lahir,1,0,'C');
           $pdf->cell(30,6,$row->jenis_kelamin,1,0,'C');
            $pdf->cell(36,6,$row->status_perkawinan,1,0,'C');
            $pdf->cell(38,6,$row->status_pegawai,1,0,'C');
            $pdf->cell(40,6,$row->nama_jabatan,1,0,'C');
            $pdf->cell(42,6,$row->nama_bidang,1,0,'C');
            $pdf->cell(44,6,$row->agama,1,0,'C');
            $pdf->cell(46,6,$row->alamat,1,0,'C');
            $pdf->cell(48,6,$row->no_ktp,1,0,'C');
            
            $pdf->cell(54,6,$row->email,1,0,'C');
            $no++;
        }
        $pdf->Output('D','Pegawai.pdf');
    }
}
