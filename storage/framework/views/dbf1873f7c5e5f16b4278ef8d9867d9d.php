<?php $__env->startSection('title', 'Edit Destinasi - ' . $destinasi->nama); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1" style="color: #0F9D8A;">Edit Destinasi Wisata</h2>
                    <p class="text-muted mb-0">Perbarui data destinasi <strong><?php echo e($destinasi->nama); ?></strong></p>
                </div>
                <a href="<?php echo e(route('destinasi.index')); ?>" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i> Kembali
                </a>
            </div>

            <div class="card shadow-sm border-0 p-4" style="border-radius: 16px;">
                <form action="<?php echo e(route('destinasi.update', $destinasi->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <!-- Nama Wisata -->
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Destinasi Wisata <span class="text-danger">*</span></label>
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
                            value="<?php echo e(old('nama', $destinasi->nama)); ?>"
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

                    <!-- Lokasi -->
                    <div class="mb-3">
                        <label for="lokasi" class="form-label fw-semibold">Lokasi <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            class="form-control <?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="lokasi"
                            name="lokasi"
                            value="<?php echo e(old('lokasi', $destinasi->lokasi)); ?>"
                            required
                        >
                        <?php $__errorArgs = ['lokasi'];
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

                    <!-- Harga Tiket -->
                    <div class="mb-3">
                        <label for="harga_tiket" class="form-label fw-semibold">Harga Tiket Masuk (Rp) <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input
                                type="number"
                                class="form-control <?php $__errorArgs = ['harga_tiket'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="harga_tiket"
                                name="harga_tiket"
                                value="<?php echo e(old('harga_tiket', (int)$destinasi->harga_tiket)); ?>"
                                min="0"
                                step="1000"
                                required
                            >
                        </div>
                        <?php $__errorArgs = ['harga_tiket'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi Wisata <span class="text-danger">*</span></label>
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
                            required
                        ><?php echo e(old('deskripsi', $destinasi->deskripsi)); ?></textarea>
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

                    <!-- Preview Gambar Saat Ini -->
                    <div class="mb-3 p-3 bg-light rounded-3 d-flex align-items-center gap-3">
                        <img src="<?php echo e($destinasi->gambar_url); ?>" alt="<?php echo e($destinasi->nama); ?>" style="width: 100px; height: 70px; object-fit: cover; border-radius: 8px;">
                        <div>
                            <span class="fw-semibold d-block small">Gambar Saat Ini:</span>
                            <code class="text-secondary small"><?php echo e($destinasi->gambar); ?></code>
                        </div>
                    </div>

                    <!-- Ubah Gambar -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="gambar_file" class="form-label fw-semibold">Ganti Gambar (Upload Baru)</label>
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
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengganti</small>
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
                            <label for="gambar" class="form-label fw-semibold">Atau Pilih Dari Gambar Aset</label>
                            <select class="form-select <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="gambar" name="gambar">
                                <option value="" <?php echo e(empty(old('gambar')) ? 'selected' : ''); ?>>-- Tetap gunakan gambar saat ini --</option>
                                <option value="curug.jpg" <?php echo e(old('gambar') == 'curug.jpg' ? 'selected' : ''); ?>>Curug Malela (curug.jpg)</option>
                                <option value="tangkuban.jpg" <?php echo e(old('gambar') == 'tangkuban.jpg' ? 'selected' : ''); ?>>Tangkuban Perahu (tangkuban.jpg)</option>
                                <option value="orchid.png" <?php echo e(old('gambar') == 'orchid.png' ? 'selected' : ''); ?>>Orchid Forest (orchid.png)</option>
                                <option value="farmhouse.jpg" <?php echo e(old('gambar') == 'farmhouse.jpg' ? 'selected' : ''); ?>>Farmhouse Lembang (farmhouse.jpg)</option>
                                <option value="dusunbambu.jpg" <?php echo e(old('gambar') == 'dusunbambu.jpg' ? 'selected' : ''); ?>>Dusun Bambu (dusunbambu.jpg)</option>
                                <option value="floating.png" <?php echo e(old('gambar') == 'floating.png' ? 'selected' : ''); ?>>Floating Market (floating.png)</option>
                                <option value="ciremai.jpg" <?php echo e(old('gambar') == 'ciremai.jpg' ? 'selected' : ''); ?>>Gunung Ciremai (ciremai.jpg)</option>
                                <option value="sumbingg.jpg" <?php echo e(old('gambar') == 'sumbingg.jpg' ? 'selected' : ''); ?>>Pemandangan Alam (sumbingg.jpg)</option>
                            </select>
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
                        <a href="<?php echo e(route('destinasi.index')); ?>" class="btn btn-light px-4">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-warning px-4 fw-semibold">
                            <i class="bi bi-check2-circle me-1"></i> Perbarui Destinasi
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/gsdget/Documents/kbbgo/resources/views/destinasi/edit.blade.php ENDPATH**/ ?>