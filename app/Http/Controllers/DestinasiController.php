<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Menampilkan daftar destinasi wisata.
     */
    public function index(Request $request)
    {
        $query = Destinasi::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('lokasi', 'like', "%{$search}%")
                  ->orWhere('deskripsi', 'like', "%{$search}%");
            });
        }

        $destinasi = $query->latest()->paginate(9)->withQueryString();

        return view('destinasi.index', compact('destinasi'));
    }

    /**
     * Menampilkan form tambah destinasi wisata.
     */
    public function create()
    {
        return view('destinasi.create');
    }

    /**
     * Menyimpan destinasi wisata baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'        => 'required|string|max:255',
            'deskripsi'   => 'required|string',
            'lokasi'      => 'required|string|max:255',
            'harga_tiket' => 'required|numeric|min:0',
            'gambar'      => 'nullable|string|max:255',
            'gambar_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
        ], [
            'nama.required'        => 'Nama destinasi wajib diisi.',
            'deskripsi.required'   => 'Deskripsi destinasi wajib diisi.',
            'lokasi.required'      => 'Lokasi destinasi wajib diisi.',
            'harga_tiket.required' => 'Harga tiket wajib diisi.',
            'harga_tiket.numeric'  => 'Harga tiket harus berupa angka.',
            'gambar_file.image'    => 'File harus berupa gambar yang valid.',
            'gambar_file.max'      => 'Ukuran gambar maksimal 5MB.',
        ]);

        if ($request->hasFile('gambar_file')) {
            $file = $request->file('gambar_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $validated['gambar'] = $filename;
        } elseif (empty($validated['gambar'])) {
            $validated['gambar'] = 'curug.jpg';
        }

        unset($validated['gambar_file']);

        Destinasi::create($validated);

        return redirect()->route('destinasi.index')
                         ->with('success', 'Destinasi wisata berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail informasi destinasi wisata.
     */
    public function show(string $id)
    {
        $destinasi = Destinasi::findOrFail($id);

        return view('destinasi.show', compact('destinasi'));
    }

    /**
     * Menampilkan form edit destinasi wisata.
     */
    public function edit(string $id)
    {
        $destinasi = Destinasi::findOrFail($id);

        return view('destinasi.edit', compact('destinasi'));
    }

    /**
     * Memperbarui data destinasi wisata di database.
     */
    public function update(Request $request, string $id)
    {
        $destinasi = Destinasi::findOrFail($id);

        $validated = $request->validate([
            'nama'        => 'required|string|max:255',
            'deskripsi'   => 'required|string',
            'lokasi'      => 'required|string|max:255',
            'harga_tiket' => 'required|numeric|min:0',
            'gambar'      => 'nullable|string|max:255',
            'gambar_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
        ], [
            'nama.required'        => 'Nama destinasi wajib diisi.',
            'deskripsi.required'   => 'Deskripsi destinasi wajib diisi.',
            'lokasi.required'      => 'Lokasi destinasi wajib diisi.',
            'harga_tiket.required' => 'Harga tiket wajib diisi.',
            'harga_tiket.numeric'  => 'Harga tiket harus berupa angka.',
            'gambar_file.image'    => 'File harus berupa gambar yang valid.',
            'gambar_file.max'      => 'Ukuran gambar maksimal 5MB.',
        ]);

        if ($request->hasFile('gambar_file')) {
            $file = $request->file('gambar_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $validated['gambar'] = $filename;
        }

        unset($validated['gambar_file']);

        $destinasi->update($validated);

        return redirect()->route('destinasi.index')
                         ->with('success', 'Destinasi wisata berhasil diperbarui!');
    }

    /**
     * Menghapus destinasi wisata dari database.
     */
    public function destroy(string $id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->delete();

        return redirect()->route('destinasi.index')
                         ->with('success', 'Destinasi wisata berhasil dihapus!');
    }
}
