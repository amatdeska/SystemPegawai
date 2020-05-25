<?php
Class Laporanpdf_bidang extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'LAPORAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Laporan Tabel Bidang',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(95,6,'No',1,0,'C');
        $pdf->Cell(95,6,'Nama Bidang',1,0,'C');

        $pdf->SetFont('Arial','',10);
        $Bidang = $this->db->get('tb_bidang')->result();
        $no = 1;
        foreach ($Bidang as $row){
          $pdf->cell(10,6,'',0,1);
          $pdf->cell(95,6,$no,1,0,'C');
            $pdf->Cell(95,6,$row->nama_bidang,1,0,'C');
            $no++;
        }
        $pdf->Output('D','Bidang.pdf');
    }
}
