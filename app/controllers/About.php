<?php
class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman About Me';
        $data['nama'] = 'Ihsan Nor Ramadhan';
        $data['alamat'] = 'Hadnil Bakti';
        $data['no_hp'] = '088245301265';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data); // Pastikan file ini ada
        $this->view('templates/footer');
    }
}
