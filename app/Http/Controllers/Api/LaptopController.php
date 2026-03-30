<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLaptopRequest;
use App\Http\Requests\UpdateLaptopRequest;
use App\Http\Resources\LaptopResource;
use App\Models\Laptop;
use Illuminate\Http\JsonResponse;

class LaptopController extends Controller
{
    /**
     * List semua laptop.
     */
    public function index(): JsonResponse
    {
        $laptops = Laptop::latest()->paginate(10);

        return response()->json([
            'message' => 'Berhasil mengambil daftar laptop',
            'data' => LaptopResource::collection($laptops),
            'meta' => [
                'current_page' => $laptops->currentPage(),
                'last_page' => $laptops->lastPage(),
                'per_page' => $laptops->perPage(),
                'total' => $laptops->total(),
            ],
        ]);
    }

    /**
     * Simpan laptop baru.
     */
    public function store(StoreLaptopRequest $request): JsonResponse
    {
        $laptop = Laptop::create($request->validated());

        return response()->json([
            'message' => 'Laptop berhasil ditambahkan',
            'data' => new LaptopResource($laptop),
        ], 201);
    }

    /**
     * Tampilkan detail laptop.
     */
    public function show(Laptop $laptop): JsonResponse
    {
        return response()->json([
            'message' => 'Berhasil mengambil detail laptop',
            'data' => new LaptopResource($laptop),
        ]);
    }

    /**
     * Update data laptop.
     */
    public function update(UpdateLaptopRequest $request, Laptop $laptop): JsonResponse
    {
        $laptop->update($request->validated());

        return response()->json([
            'message' => 'Laptop berhasil diperbarui',
            'data' => new LaptopResource($laptop->fresh()),
        ]);
    }

    /**
     * Hapus laptop.
     */
    public function destroy(Laptop $laptop): JsonResponse
    {
        $laptop->delete();

        return response()->json([
            'message' => 'Laptop berhasil dihapus',
        ]);
    }
}
