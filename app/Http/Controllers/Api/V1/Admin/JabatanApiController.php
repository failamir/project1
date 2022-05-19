<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;
use App\Http\Resources\Admin\JabatanResource;
use App\Models\Jabatan;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JabatanApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('jabatan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new JabatanResource(Jabatan::advancedFilter());
    }

    public function store(StoreJabatanRequest $request)
    {
        $jabatan = Jabatan::create($request->validated());

        return (new JabatanResource($jabatan))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('jabatan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(Jabatan $jabatan)
    {
        abort_if(Gate::denies('jabatan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new JabatanResource($jabatan);
    }

    public function update(UpdateJabatanRequest $request, Jabatan $jabatan)
    {
        $jabatan->update($request->validated());

        return (new JabatanResource($jabatan))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Jabatan $jabatan)
    {
        abort_if(Gate::denies('jabatan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new JabatanResource($jabatan),
            'meta' => [],
        ]);
    }

    public function destroy(Jabatan $jabatan)
    {
        abort_if(Gate::denies('jabatan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jabatan->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
