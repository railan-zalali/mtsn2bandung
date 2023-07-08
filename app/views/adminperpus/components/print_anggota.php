<!DOCTYPE html>
<html>

<head>
    <title>Tombol Buka Kartu Anggota</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            /* justify-content: flex-end; */
        }

        .card {
            width: 336px;
            height: 193px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 0 10px 10px 0;
            /* margin-bottom: 10px; */
            /* display: block; */
            /* background-color: #fff; */
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php
    $no = 1;
    foreach ($data['anggota'] as $anggota) : ?>
        <div class="card">
            <div style="width: 336px; height: 193px; position: relative; background-image: url(<?= BASEURL ?>/img/Ash.jpg); border-radius: 10px; overflow: hidden">
                <div style="left: 25px; top: 25px; position: absolute">
                    <div style="left: 4px; top: 19px; position: absolute; color: black; font-size: 8px; font-family: Montserrat; font-weight: 700;"> Kelas <?= $anggota['nama_kelas'] . ' ' . $anggota['abjad']; ?></div>
                    <div style="left: 0px; top: 0px; color: black; font-size: 14px; font-family: Syne; font-weight: 700; word-wrap: break-word"><?= $anggota['nama_anggota']; ?></div>
                </div>
                <div style="width: 168px; height: 193px; left: 168px; top: 0px; position: absolute; background: radial-gradient(42.72% 87.31% at 42.59% 623.23%, #35D99E 0%, rgba(56.71, 153.23, 223.12, 0) 100%); border-radius: 9999px"></div>
                <div style="width: 90.65px; height: 18.90px; left: 195px; top: 78px; position: absolute">
                    <div style="width: 56px; height: 56px; left:20px; position: absolute;">
                        <img src="<?= BASEURL; ?>/img/logo.png" style="width: 75px;" alt="">
                    </div>
                </div>
                <div style="height: 50.26px; left: 25px; top: 135px; position: absolute">
                    <div style="width: 104px; height: 20.10px; left: 0px; top: 30.16px; position: absolute">
                        <div style="width: 200px; height: 20.10px; left: 25px; top: 10px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 300;"><?= $anggota['alamat']; ?></div>
                        <div style="width: 10px; height: 10.05px; left: 0px; top: 5px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 5.71px; height: 7.68px; position: relative; margin-top: 5px;">
                                <i class="bi bi-geo-alt width: 8.33px; height: 8.38px;"></i>
                            </div>
                        </div>
                    </div>
                    <div style="width: 92px; height: 10.05px; left: 0px; top: 15.08px; position: absolute">
                        <div style="width: 150px; height: 10.05px; left: 25px; top: 5px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 300;"><?= $anggota['email']; ?></div>
                        <div style="width: 10px; height: 10.05px; left: 0px; top: 5px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="width: 7.50px; height: 5.86px; position: relative">
                                <i class="bi bi-envelope width: 8.33px; height: 8.38px;"></i>
                            </div>
                        </div>
                    </div>
                    <div style="width: 88px; height: 10.05px; left: 0px; top: 0px; position: absolute">
                        <div style="width: 10px; height: 10.05px; left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <i class="bi bi-telephone width: 8.33px; height: 8.38px;"></i>
                        </div>
                        <div style="width: 73px; height: 10.05px; left: 25px; top: 0px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 300;"><?= $anggota['no_hp']; ?></div>
                    </div>
                </div>
                <div style="width: 127.13px; height: 127.13px; left: 43px; top: 45px; position: absolute">

                    <div style="width: 56px; height: 56px; top: 34.85px; position: absolute;">
                        <img src="<?= BASEURL; ?>/img/logo.png" style="width: 75px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>