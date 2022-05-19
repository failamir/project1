<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePangkatRequest;
use App\Http\Requests\UpdatePangkatRequest;
use App\Http\Resources\Admin\PangkatResource;
use App\Models\Pangkat;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PangkatApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pangkat_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PangkatResource(Pangkat::advancedFilter());
    }

    public function store(StorePangkatRequest $request)
    {
        $pangkat = Pangkat::create($request->validated());

        return (new PangkatResource($pangkat))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('pangkat_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [],
        ]);
    }

    public function show(Pangkat $pangkat)
    {
        abort_if(Gate::denies('pangkat_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PangkatResource($pangkat);
    }

    public function update(UpdatePangkatRequest $request, Pangkat $pangkat)
    {
        $pangkat->update($request->validated());

        return (new PangkatResource($pangkat))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Pangkat $pangkat)
    {
        abort_if(Gate::denies('pangkat_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new PangkatResource($pangkat),
            'meta' => [],
        ]);
    }

    public function destroy(Pangkat $pangkat)
    {
        abort_if(Gate::denies('pangkat_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pangkat->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
