<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="glyphicon glyphicon-book"></i> Detail Buku: <?= esc($buku['judul_buku']) ?></h4>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Gambar Cover Buku -->
                <div class="col-md-4 text-center mb-3">
                    <img src="<?= base_url('Assets/CoverBuku/' . $buku['cover_buku']) ?>" alt="Cover Buku" class="img-fluid img-thumbnail rounded">
                    <p class="mt-2 text-muted"><small>Cover Buku</small></p>
                </div>

                <!-- Informasi Buku -->
                <div class="col-md-8">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th><i class="glyphicon glyphicon-tag"></i> ID Buku</th>
                                <td><?= esc($buku['id_buku']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-bookmark"></i> Judul</th>
                                <td><?= esc($buku['judul_buku']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-user"></i> Pengarang</th>
                                <td><?= esc($buku['pengarang']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-home"></i> Penerbit</th>
                                <td><?= esc($buku['penerbit']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-calendar"></i> Tahun</th>
                                <td><?= esc($buku['tahun']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-list-alt"></i> Jumlah Eksemplar</th>
                                <td><?= esc($buku['jumlah_eksemplar']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-folder-open"></i> Kategori</th>
                                <td><?= esc($buku['nama_kategori']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-th-large"></i> Rak</th>
                                <td><?= esc($buku['nama_rak']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-pencil"></i> Keterangan</th>
                                <td><?= esc($buku['keterangan']) ?></td>
                            </tr>
                            <tr>
                                <th><i class="glyphicon glyphicon-download-alt"></i> E-Book</th>
                                <td>
                                    <?php if ($buku['e_book']) { ?>
                                        <a href="<?= base_url('Assets/E-Book/' . $buku['e_book']) ?>" target="_blank" class="btn btn-sm btn-info">
                                            <i class="glyphicon glyphicon-download-alt"></i> Download E-Book
                                        </a>
                                    <?php } else { ?>
                                        <span class="text-danger">Tidak tersedia</span>
                                    <?php } ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tombol Kembali -->
                    <a href="<?= base_url('buku/master-data-buku') ?>" class="btn btn-sm btn-secondary mt-3">
                        <i class="glyphicon glyphicon-arrow-left"></i> Kembali ke Daftar Buku
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
