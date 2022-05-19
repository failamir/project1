<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTugaRequest;
use App\Http\Requests\UpdateTugaRequest;
use App\Http\Resources\Admin\TugaResource;
use App\Models\Tuga;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TugasApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tuga_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TugaResource(Tuga::with(['paraf'])->advancedFilter());
    }

    public function store(StoreTugaRequest $request)
    {
        $tuga = Tuga::create($request->validated());

        return (new TugaResource($tuga))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function create()
    {
        abort_if(Gate::denies('tuga_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'meta' => [
                'paraf' => User::get(['id', 'name']),
            ],
        ]);
    }

    public function show(Tuga $tuga)
    {
        abort_if(Gate::denies('tuga_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TugaResource($tuga->load(['paraf']));
    }

    public function update(UpdateTugaRequest $request, Tuga $tuga)
    {
        $tuga->update($request->validated());

        return (new TugaResource($tuga))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function edit(Tuga $tuga)
    {
        abort_if(Gate::denies('tuga_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response([
            'data' => new TugaResource($tuga->load(['paraf'])),
            'meta' => [
                'paraf' => User::get(['id', 'name']),
            ],
        ]);
    }

    public function destroy(Tuga $tuga)
    {
        abort_if(Gate::denies('tuga_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tuga->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
