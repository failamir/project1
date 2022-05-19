<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMataPelajaranRequest;
use App\Http\Requests\UpdateMataPelajaranRequest;
use App\Http\Resources\Admin\MataPelajaranResource;
use App\Models\MataPelajaran;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MataPelajaranApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mata_pelajaran_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MataPelajaranResource(MataPelajaran::advancedFilter());
    }

    public function store(StoreMataPelajaranRequest $request)
    {
        $mataPelajaran = MataPelajaran::create($request->validated());

        return (new MataPelajaranResource($mataPelajaran))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('mata_pelajaran_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(MataPelajaran $mataPelajaran)
    {
        abort_if(Gate::denies('mata_pelajaran_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MataPelajaranResource($mataPelajaran);
    }

    public function update(UpdateMataPelajaranRequest $request, MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->update($request->validated());

        return (new MataPelajaranResource($mataPelajaran))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(MataPelajaran $mataPelajaran)
    {
        abort_if(Gate::denies('mata_pelajaran_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new MataPelajaranResource($mataPelajaran),
            'meta' => [],
        ]);
    }

    public function destroy(MataPelajaran $mataPelajaran)
    {
        abort_if(Gate::denies('mata_pelajaran_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mataPelajaran->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
