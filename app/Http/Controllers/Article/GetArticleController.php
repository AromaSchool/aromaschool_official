<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Service\ArticleService;
use Illuminate\Http\Request;

class GetArticleController extends Controller
{
    protected $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, int $id)
    {
        $response = $this->service->getArticle($id);

        if ($response) {
            return $response;
        }

        return response('', 204);
    }
}
