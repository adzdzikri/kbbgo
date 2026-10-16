<?php $__env->startSection('title', 'Tambah Data UMKM - KBB GO!'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1" style="color: #F4A300;">Tambah Data UMKM</h2>
                    <p class="text-muted mb-0">Daftarkan usaha mikro, kecil, dan menengah lokal Kabupaten Bandung Barat.</p>
                </div>
                <a href="<?php echo e(route('umkm.index')); ?>" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i> Kembali
                </a>
            </div>

            <div class="card shadow-sm border-0 p-4" style="border-radius: 16px;">
                <form action="<?php echo e(route('umkm.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <!-- Nama UMKM -->
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama UMKM / Usaha <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="nama"
                            name="nama"
                            value="<?php echo e(old('nama')); ?>"
                            placeholder="Contoh: Kopi Java Preanger Gununghalu"
                            required
                        >
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Kategori -->
                    <div class="mb-3">
                        <label for="kategori" class="form-label fw-semibold">Kategori Usaha / Produk <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            class="form-control <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="kategori"
                            name="kategori"
                            list="kategori-list"
                            value="<?php echo e(old('kategori')); ?>"
                            placeholder="Contoh: Kuliner & Camilan, Kerajinan Tangan, Fashion & Batik"
                            required
                        >
                        <datalist id="kategori-list">
                            <option value="Kuliner & Camilan">
                            <option value="Minuman & Kopi">
                            <option value="Fashion & Kerajinan">
                            <option value="Kerajinan Tangan">
                            <option value="Seni & Budaya">
                            <option value="Pertanian & Olahan">
                        </datalist>
                        <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-semibold">Alamat / Lokasi Usaha <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="alamat"
                            name="alamat"
                            value="<?php echo e(old('alamat')); ?>"
                            placeholder="Contoh: Jl. Raya Lembang No. 45, Kecamatan Lembang, KBB"
                            required
                        >
                        <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi Produk & Profil Usaha <span class="text-danger">*</span></label>
                        <textarea
                            class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="deskripsi"
                            name="deskripsi"
                            rows="4"
                            placeholder="Jelaskan produk unggulan, keunikan bahan baku lokal, serta cara pemesanan..."
                            required
                        ><?php echo e(old('deskripsi')); ?></textarea>
                        <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Upload Foto / Pilih Foto Bawaan -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="gambar_file" class="form-label fw-semibold">Upload Gambar (Opsional)</label>
                            <input
                                type="file"
                                class="form-control <?php $__errorArgs = ['gambar_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="gambar_file"
                                name="gambar_file"
                                accept="image/*"
                            >
                            <small class="text-muted">Format: JPG, PNG, WEBP (Maks: 5MB)</small>
                            <?php $__errorArgs = ['gambar_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6">
                            <label for="gambar" class="form-label fw-semibold">Atau Pilih Gambar Aset Lama</label>
                            <select class="form-select <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="gambar" name="gambar">
                                <option value="kripik.jpg" <?php echo e(old('gambar') == 'kripik.jpg' ? 'selected' : ''); ?>>Keripik Singkong (kripik.jpg)</option>
                                <option value="kopi.png" <?php echo e(old('gambar') == 'kopi.png' ? 'selected' : ''); ?>>Kopi Gununghalu (kopi.png)</option>
                                <option value="batik2.png" <?php echo e(old('gambar') == 'batik2.png' ? 'selected' : ''); ?>>Batik Khas KBB (batik2.png)</option>
                                <option value="anyaman.jpg" <?php echo e(old('gambar') == 'anyaman.jpg' ? 'selected' : ''); ?>>Anyaman Bambu (anyaman.jpg)</option>
                                <option value="wayang.jpg" <?php echo e(old('gambar') == 'wayang.jpg' ? 'selected' : ''); ?>>Wayang Golek (wayang.jpg)</option>
                                <option value="bakpia.jpg" <?php echo e(old('gambar') == 'bakpia.jpg' ? 'selected' : ''); ?>>Bakpia & Kue (bakpia.jpg)</option>
                                <option value="kuliner.jpg" <?php echo e(old('gambar') == 'kuliner.jpg' ? 'selected' : ''); ?>>Kuliner Sunda (kuliner.jpg)</option>
                            </select>
                            <small class="text-muted">Aset bawaan dari proyek React KBBGO</small>
                            <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="d-flex justify-content-end gap-2 pt-3 border-top">
                        <a href="<?php echo e(route('umkm.index')); ?>" class="btn btn-light px-4">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-kbb-warning px-4">
                            <i class="bi bi-save me-1"></i> Simpan Data UMKM
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gsdget/Documents/kbbgo/resources/views/umkm/create.blade.php ENDPATH**/ ?>