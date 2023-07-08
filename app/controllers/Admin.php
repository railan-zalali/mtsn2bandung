<?php

class Admin extends Controller
{

    public function addPinjam()
    {
        $id_user = $_SESSION['id_user'];
        if ($this->model('Admin_model')->addPinjam($_POST, $id_user) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        }
    }
    public function addBuku()
    {
        $id_user = $_SESSION['id_user'];
        if ($this->model('Admin_model')->addBuku($_POST, $id_user) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        }
    }
    public function addAnggota()
    {
        if ($this->model('Admin_model')->addAnggota($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        }
    }
    public function addPetugas()
    {
        if ($this->model('Admin_model')->addPetugas($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        }
    }












    public function updatePinjam()
    {
        if ($this->model('Admin_model')->UpdateDataPinjam($_POST, $_POST['id_pinjam']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            // var_dump($_POST);
            // die();
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        }
    }

    public function getUpdatePinjam($id_pinjam)
    {
        echo json_encode($this->model('Admin_model')->getPinjamById($id_pinjam));
    }

    public function updateBuku()
    {
        if ($this->model('Admin_model')->UpdateDataBuku($_POST, $_POST['id_buku_induk']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            // var_dump($_POST);
            // die();
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        }
    }

    public function getUpdateBuku($id_buku_induk)
    {
        echo json_encode($this->model('Admin_model')->getBukuById($id_buku_induk));
    }

    public function UpdatePetugas()
    {
        if ($this->model('Admin_model')->UpdateDataPetugas($_POST, $_POST['id_user']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        }
    }
    public function getUpdatePetugas($id_user)
    {
        echo json_encode($this->model('Admin_model')->getPetugasById($id_user));
    }
    public function UpdateAnggota()
    {
        if ($this->model('Admin_model')->UpdateDataAnggota($_POST, $_POST['id_anggota']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        }
    }
    public function getUpdateAnggota($id_anggota)
    {
        echo json_encode($this->model('Admin_model')->getAnggotaById($id_anggota));
    }











    public function deletePinjam($id_pinjam)
    {
        if ($this->model('admin_model')->deletePinjam($id_pinjam) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        }
    }
    public function deleteBuku($id_buku_induk)
    {
        if ($this->model('admin_model')->deleteBuku($id_buku_induk) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        }
    }
    public function deletePetugas($id_user)
    {
        if ($this->model('admin_model')->deletePetugas($id_user) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        }
    }
    public function deleteAnggota($id_anggota)
    {
        if ($this->model('admin_model')->deleteAnggota($id_anggota) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        }
    }










    public function print_anggota()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data Pinjam";
            $data['pinjam'] = $this->model('Admin_model')->getPinjam();
            $data['kls'] = $this->model('Admin_model')->getKelas();
            $data['buku'] = $this->model('Admin_model')->getBuku();
            $data['anggota'] = $this->model('Admin_model')->getAnggota();
            // var_dump($data);
            // die();
            // $this->view('templates/admin/header', $data);
            $this->view('adminperpus/components/print_anggota', $data);
            // $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }
    public function pinjam()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data Pinjam";
            $data['pinjam'] = $this->model('Admin_model')->getPinjam();
            $data['kls'] = $this->model('Admin_model')->getKelas();
            $data['buku'] = $this->model('Admin_model')->getBuku();
            $data['anggota'] = $this->model('Admin_model')->getAnggota();
            // var_dump($data);
            // die();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/pinjam', $data);
            $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }

    public function buku()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data Buku";
            $data['buku'] = $this->model('Admin_model')->getBuku();
            $data['kls'] = $this->model('Admin_model')->getKelas();
            // var_dump($data);
            // die();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/buku', $data);
            $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }
    public function anggota()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data Petugas";
            $data['anggota'] = $this->model('Admin_model')->getAnggota();
            $data['kls'] = $this->model('Admin_model')->getKelas();
            // var_dump($data);
            // die();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/anggota', $data);
            $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }

    public function petugas()
    {
        if (isset($_SESSION['pegawai']) && isset($_SESSION['id_level']) && $_SESSION['id_level'] == 1) {
            $data['judul'] = "Data Petugas";
            $data['user'] = $this->model('Admin_model')->getPetugas();
            $data['level'] = $this->model('Admin_model')->getLevel();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/petugas', $data);
            $this->view('templates/admin/footer');
        } else {

            $this->view('admin/login');
        }
    }

    // public function petugas()
    // {
    //     $data['judul'] = "Dashboard";

    //     if (isset($_SESSION['pegawai'])) {
    //         if ($_SESSION['id_level'] == 1) {
    //             $data['judul'] = "Data Petugas";
    //             $data['user'] = $this->model('Admin_model')->getPetugas();
    //             $data['level'] = $this->model('Admin_model')->getLevel();

    //             $this->view('templates/admin/header', $data);
    //             $this->view('adminperpus/petugas', $data);
    //             $this->view('templates/admin/footer');
    //         } else {
    //             $data['judul'] = "Dashboard";
    //             $data['countbuku'] = $this->model('Admin_model')->countBuku();
    //             $data['countpinjam'] = $this->model('Admin_model')->countByPinjam();
    //             $data['countkembali'] = $this->model('Admin_model')->countByKembali();
    //             $data['countanggota'] = $this->model('Admin_model')->countAnggota();

    //             $this->view('templates/admin/header', $data);
    //             $this->view('admin/index', $data);
    //             $this->view('templates/admin/footer');
    //         }
    //     } else {
    //         $this->view('admin/login');
    //     }
    // }






    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['countbuku'] = $this->model('Admin_model')->countBuku();
        $data['countpinjam'] = $this->model('Admin_model')->countByPinjam();
        $data['countkembali'] = $this->model('Admin_model')->countByKembali();
        $data['countanggota'] = $this->model('Admin_model')->countAnggota();
        $data['countpetugas'] = $this->model('Admin_model')->countPetugas();

        if (isset($_SESSION['pegawai']) && isset($_SESSION['status']) && $_SESSION['status'] === 'aktif') {
            $data['judul'] = "Dashboard";
            $this->view('templates/admin/header', $data);
            $this->view('admin/index', $data);
            $this->view('templates/admin/footer');
        } else {

            $this->view('admin/login');
        }
    }







    public function register()
    {
        // if (isset($_SESSION['pegawai']) && isset($_SESSION['status']) && $_SESSION['status'] === 'aktif') {
        // $data['judul'] = "Dashboard";
        // $this->view('templates/admin/header', $data);
        // $this->view('admin/register');
        // $this->view('templates/admin/footer');
        // } else {

        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Dashboard";
            $this->view('templates/admin/header', $data);
            $this->view('admin/index');
            $this->view('templates/admin/footer');
        } else {

            $this->view('admin/register');
        }
    }


    public function admin_register()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $admin_model = $this->model('Admin_model');

            if ($admin_model->register_admin($_POST['nama_user'], $_POST['username'], $_POST['email'], $_POST['password']) > 0) {

                Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
                $this->index();
                exit;
                // header('Location: ' . BASEURL . '/admin/index');
            } else {

                Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
                header('Location: ' . BASEURL . '/admin/index');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'Mohon lengkapi semua field', 'error');
            header('Location: ' . BASEURL . '/admin/register');
            exit;
        }
    }



    public function admin_login()
    {
        $loginResult = $this->model('Admin_model')->login_admin($_POST['email'], $_POST['password']);

        if ($loginResult !== 'error') {
            if (isset($_SESSION['status']) && $_SESSION['status'] == "aktif") {
                if (isset($_SESSION['pegawai'])) {
                    Flasher::setLogin('Berhasil', 'Login', 'success');
                    header('Location: ' . BASEURL . '/admin/index');
                } else {
                    $_SESSION['error'] = true;
                    Flasher::setLogin('Gagal', 'Login', 'error');
                    header('Location: ' . BASEURL . '/admin/login');
                }
            } else {
                $_SESSION['error'] = true;
                Flasher::setLogin('Gagal', 'Anda Harus Konfirmasi Terlebih Dulu', 'error');
                header('Location: ' . BASEURL . '/admin/login');
            }
        } else {
            $_SESSION['error'] = true;
            Flasher::setLogin('Gagal', 'Login', 'error');
            header('Location: ' . BASEURL . '/admin/login');
        }

        exit;
    }
}
