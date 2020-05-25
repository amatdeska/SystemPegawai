<?php
Class Laporanpdf_izin extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        
        $this->load->model('Model_izin');

    }

    function index(){

                

        $pdf = new FPDF('l','mm',array(310,150));
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16,'C');
        // mencetak string
        $pdf->Cell(290,7,'LAPORAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'Laporan Tabel Izin',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'No',1,0,'C');
        $pdf->Cell(25,6,'Nama Pegawai',1,0,'C');
        $pdf->Cell(25,6,'Nama Cuti',1,0,'C');
        $pdf->Cell(26,6,'Nama Seminar',1,0,'C');
        $pdf->Cell(29,6,'Nama Sekolah',1,0,'C');
        $pdf->Cell(30,6,'tglawal',1,0,'C');
        $pdf->Cell(32,6,'tempat',1,0,'C');
        $pdf->Cell(33,6,'tglakhir',1,0,'C');
        $pdf->Cell(35,6,'status',1,0,'C');
        $pdf->Cell(36,6,'konfirmasi',1,0,'C');

        $pdf->SetFont('Arial','',10);

        $this->db->select('izin.id_izin AS id_izin,nama,nama_kolah, nama_seminar,nama_sekolah,tglawal,tempat,tglakhir,status,konfirmasi');
        $this->db->from('izin');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = izin.id_pegawai', 'left');
        $this->db->join('tb_cuti', 'tb_cuti.id_cuti = izin.id_cuti', 'left');
        $this->db->join('tb_seminar', 'tb_seminar.id_seminar = izin.id_seminar', 'left');
        $this->db->join('tb_sekolah', 'tb_sekolah.id_sekolah = izin.id_sekolah', 'left');
        $Izin = $this->db->get()->result();
        $no = 1;
        foreach ($Izin as $row){
          $pdf->cell(10,6,'',0,1,'C');
          $pdf->cell(20,6,$no,1,0,'C');
            $pdf->Cell(25,6,$row->nama,1,0,'C');
            $pdf->Cell(25,6,$row->nama_kolah,1,0,'C');
            $pdf->Cell(26,6,$row->nama_seminar,1,0,'C');
            $pdf->Cell(29,6,$row->nama_sekolah,1,0,'C');
            $pdf->Cell(30,6,$row->tglawal,1,0,'C');
            $pdf->Cell(32,6,$row->tempat,1,0,'C');
            $pdf->Cell(33,6,$row->tglakhir,1,0,'C');
            $pdf->Cell(35,6,$row->status,1,0,'C');
            $pdf->Cell(36,6,$row->konfirmasi,1,0,'C');
            $no++;
        }
        ($data);
        $pdf->Output('D','Izin.pdf');
    }
}
