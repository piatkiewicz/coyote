<?php

namespace Coyote\Services\Elasticsearch\Strategies;

use Coyote\Http\Resources\HitResource;
use Coyote\Services\Elasticsearch\SearchOptions;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CommonStrategy extends Strategy
{
    public function search(Request $request): JsonResponse
    {
        $hits = $this->api->search(new SearchOptions($request));

        $paginator = new LengthAwarePaginator($hits->hits, $hits->total, 10);

        return HitResource::collection($paginator)->additional(['took' => $hits->took])->toResponse($request);
    }
}
