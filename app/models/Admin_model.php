<?php

class Admin_model
{

    private $table = 'user';
    private $table_level = 'level';
    private $table_kelas = 'kelas';
    private $table_anggota = 'anggota';
    private $table_buku = 'buku_induk';
    private $table_pinjam = 'pinjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    public function deletePinjam($id_pinjam)
    {
        $query = "DELETE FROM pinjaman WHERE id_pinjam = :id_pinjam";
        $this->db->query($query);
        $this->db->bind('id_pinjam', $id_pinjam);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBuku($id_buku_induk)
    {
        $query = "DELETE FROM buku_induk WHERE id_buku_induk = :id_buku_induk";
        $this->db->query($query);
        $this->db->bind('id_buku_induk', $id_buku_induk);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletePetugas($id_user)
    {
        $query = "DELETE FROM user WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteAnggota($id_anggota)
    {
        $query = "DELETE FROM anggota WHERE id_anggota = :id_anggota";
        $this->db->query($query);
        $this->db->bind('id_anggota', $id_anggota);

        $this->db->execute();

        return $this->db->rowCount();
    }








    public function addPinjam($data, $id_user)
    {


        $query = "INSERT INTO pinjaman
					VALUES 
					('', :id_buku_induk, :id_petugas, :id_anggota, :id_kelas, :tanggal, :jumlah_pinjam, null, :keterangan, 'dipinjam')";
        $this->db->query($query);
        $this->db->bind('id_buku_induk', $data['id_buku_induk']);
        $this->db->bind('id_petugas', $id_user);
        $this->db->bind('id_anggota', $data['id_anggota']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('jumlah_pinjam', $data['jumlah_pinjam']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function addPerpus($data, $id_user)
    {

        $query = "INSERT INTO pinjaman
					VALUES 
					('', :id_buku_induk, :id_petugas, :id_anggota, :tanggal, :kelas, :abjad, :nama_buku, :jumlah_pinjam, null, :keterangan, 'dipinjam')";
        $this->db->query($query);
        $this->db->bind('id_buku_induk', $data['id_buku_induk']);
        $this->db->bind('id_petugas', $id_user);
        $this->db->bind('id_anggota', $data['id_anggota']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('nama_siswa', $data['nama_siswa']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('abjad', $data['abjad']);
        $this->db->bind('nama_buku', $data['nama_buku']);
        $this->db->bind('jumlah_pinjam', $data['jumlah_pinjam']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function addBuku($data, $id_user)
    {
        // var_dump($data);
        // die();
        $query = "INSERT INTO buku_induk
					VALUES 
						('', :id_user, :nomor_induk, :judul_buku, :pengarang, :penerbit, :tempat_terbit, :asal_buku, :tanggal_masuk, :tahun)";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);
        $this->db->bind('nomor_induk', $data['nomor_induk']);
        $this->db->bind('judul_buku', $data['judul_buku']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tempat_terbit', $data['tempat_terbit']);
        $this->db->bind('asal_buku', $data['asal_buku']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('tahun', $data['tahun']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function addAnggota($data)
    {
        // var_dump($data);
        // die();
        $query = "INSERT INTO anggota 
                    VALUES
                    ('', :nama_anggota, :id_kelas, :jenis_kelamin, :alamat, :no_hp, :email)";
        $this->db->query($query);
        $this->db->bind('nama_anggota', $data['nama_anggota']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function addPetugas($data)
    {
        // var_dump($data);
        // die();
        $query = "INSERT INTO user 
                    VALUES
                    ('', :id_level, :nama_user, :username, :email, :password, :status)";
        $this->db->query($query);
        $this->db->bind('id_level', $data['id_level']);
        $this->db->bind('nama_user', $data['nama_user']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('status', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }





    // public function getPetugas()
    // {
    //     $this->db->query('SELECT ' . $this->table . '.*, ' . $this->table_level . '.level
    //     FROM ' . $this->table . '
    //     JOIN ' . $this->table_level . ' ON ' . $this->table . '.id_level = ' . $this->table_level . '.id_level');
    //     return $this->db->resultSet();
    // }


    public function getPinjam()
    {
        $this->db->query('SELECT ' .
            $this->table_pinjam . '.*, ' .
            $this->table_buku . '.judul_buku, ' .
            $this->table_anggota . '.nama_anggota, ' .
            $this->table_kelas . '. *
        
        FROM ' . $this->table_pinjam . '
        JOIN ' . $this->table_buku . ' ON ' . $this->table_pinjam . '.id_buku_induk = ' . $this->table_buku . '.id_buku_induk
        JOIN ' . $this->table_anggota . ' ON ' . $this->table_pinjam . '.id_anggota = ' . $this->table_anggota . '.id_anggota
        JOIN ' . $this->table_kelas . ' ON ' . $this->table_anggota . '.id_kelas = ' . $this->table_kelas . '.id_kelas');
        return $this->db->resultSet();
    }

    public function getBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table_buku);
        return $this->db->resultSet();
    }
    public function getKelas()
    {
        $this->db->query('SELECT * FROM ' . $this->table_kelas);
        return $this->db->resultSet();
    }

    public function getAnggota()
    {
        $this->db->query('SELECT ' .
            $this->table_anggota . '. * ,' .
            $this->table_kelas . '. * 

        FROM ' . $this->table_anggota . '
        JOIN ' . $this->table_kelas . ' ON ' . $this->table_anggota . '.id_kelas = ' . $this->table_kelas . '.id_kelas');
        return $this->db->resultSet();
    }

    public function getLevel()
    {
        $this->db->query('SELECT * FROM ' . $this->table_level);
        return $this->db->resultSet();
    }

    public function getPetugas()
    {
        $this->db->query('SELECT ' . $this->table . '.*, ' . $this->table_level . '.level
        FROM ' . $this->table . '
        JOIN ' . $this->table_level . ' ON ' . $this->table . '.id_level = ' . $this->table_level . '.id_level');
        return $this->db->resultSet();
    }




    public function getPinjamById($id_pinjam)
    {
        $this->db->query('SELECT * FROM ' . $this->table_pinjam . ' WHERE id_pinjam = :id_pinjam');
        $this->db->bind('id_pinjam', $id_pinjam);
        return $this->db->single();
    }
    public function getPetugasById($id_user)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user');
        $this->db->bind('id_user', $id_user);

        return $this->db->single();
    }
    public function getAnggotaById($id_anggota)
    {
        $this->db->query('SELECT * FROM ' . $this->table_anggota . ' WHERE id_anggota = :id_anggota');
        $this->db->bind('id_anggota', $id_anggota);

        return $this->db->single();
    }
    public function getBukuById($id_buku_induk)
    {
        $this->db->query('SELECT * FROM ' . $this->table_buku . ' WHERE id_buku_induk = :id_buku_induk');
        $this->db->bind('id_buku_induk', $id_buku_induk);

        return $this->db->single();
    }









    public function countPetugas()
    {
        $this->db->query('SELECT COUNT(*) AS count FROM ' . $this->table);
        $row = $this->db->single();
        return $row['count'];
    }

    public function countBuku()
    {
        $this->db->query('SELECT COUNT(*) AS count FROM ' . $this->table_buku);
        $row = $this->db->single();
        return $row['count'];
    }
    public function countAnggota()
    {
        $this->db->query('SELECT COUNT(*) AS count FROM ' . $this->table_anggota);
        $row = $this->db->single();
        return $row['count'];
    }
    public function countByPinjam($status = 'dipinjam')
    {
        $this->db->query('SELECT COUNT(*) AS count FROM ' . $this->table_pinjam . ' WHERE status=:status');
        $this->db->bind('status', $status);
        $row = $this->db->single();
        return $row['count'];
    }

    public function countByKembali($status = 'dikembalikan')
    {
        $this->db->query('SELECT COUNT(*) AS count FROM ' . $this->table_pinjam . ' WHERE status=:status');
        $this->db->bind('status', $status);
        $row = $this->db->single();
        return $row['count'];
    }















    public function UpdateDataPinjam($data, $id_pinjam)
    {
        $query = "UPDATE pinjaman SET 
						id_buku_induk = :id_buku_induk,
						id_anggota = :id_anggota,
						id_kelas = :id_kelas,
						tanggal = :tanggal,
						jumlah_pinjam = :jumlah_pinjam,
						jumlah_kembali = :jumlah_kembali,
						keterangan = :keterangan,
						status = :status
					WHERE id_pinjam = :id_pinjam";
        // var_dump($data);
        // die();
        $this->db->query($query);
        $this->db->bind('id_buku_induk', $data['id_buku_induk']);
        $this->db->bind('id_anggota', $data['id_anggota']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('jumlah_pinjam', $data['jumlah_pinjam']);
        $this->db->bind('jumlah_kembali', $data['jumlah_kembali']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id_pinjam', $id_pinjam);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function UpdateDataBuku($data, $id_buku_induk)
    {
        $query = "UPDATE buku_induk SET 
						nomor_induk = :nomor_induk,
						judul_buku = :judul_buku,
						pengarang = :pengarang,
						penerbit = :penerbit,
						tempat_terbit = :tempat_terbit,
						asal_buku = :asal_buku,
						tanggal_masuk = :tanggal_masuk,
						tahun = :tahun
					WHERE id_buku_induk = :id_buku_induk";
        // var_dump($data);
        // die();
        $this->db->query($query);
        $this->db->bind('nomor_induk', $data['nomor_induk']);
        $this->db->bind('judul_buku', $data['judul_buku']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tempat_terbit', $data['tempat_terbit']);
        $this->db->bind('asal_buku', $data['asal_buku']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('id_buku_induk', $id_buku_induk);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function UpdateDataPetugas($data, $id_user)
    {
        // var_dump($data);
        // die();
        $query = "UPDATE user SET 
						id_level = :id_level,
						status = :status
					WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_level', $data['id_level']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id_user', $id_user);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function UpdateDataAnggota($data, $id_anggota)
    {
        $query = "UPDATE anggota SET 
						nama_anggota = :nama_anggota,
						id_kelas = :id_kelas,
						jenis_kelamin = :jenis_kelamin,
						alamat = :alamat,
						no_hp = :no_hp,
						email = :email
					WHERE id_anggota = :id_anggota";
        $this->db->query($query);
        $this->db->bind('nama_anggota', $data['nama_anggota']);
        $this->db->bind('id_kelas', $data['id_kelas']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id_anggota', $id_anggota);

        $this->db->execute();

        return $this->db->rowCount();
    }











    public function register_admin($nama_user, $username, $email, $password)
    {

        $id_level = '2';
        $status = 'tidak aktif';
        $this->db->query('INSERT INTO user VALUES ("", :id_level , :nama_user , :username , :email, :password, :status)');
        $this->db->bind(':id_level', $id_level);
        $this->db->bind(':nama_user', $nama_user);
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':status', $status);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function login_admin($email, $password)
    {

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email && password = :password');
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);

        $this->db->execute();
        if ($this->db->rowCount() === 1) {
            $data = $this->db->single();

            if ($password == $data['password']) {
                $_SESSION['id_user'] = $data['id_user'];
                $_SESSION['id_level'] = $data['id_level'];
                $_SESSION['nama_user'] = $data['nama_user'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['status'] = $data['status'];
                $_SESSION['pegawai'] = true;
                return $_SESSION['pegawai'];
            }
        }
        $_SESSION['error'] = true;
        return 'error';
    }
}
