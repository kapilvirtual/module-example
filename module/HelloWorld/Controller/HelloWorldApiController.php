<?php
namespace ModuleExample\HelloWorld\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use ModuleExample\HelloWorld\PageTransformer;
use ModuleExample\HelloWorld\Repository\PageRepository;

class HelloWorldApiController extends Controller
{
    /**
     * @var PageRepository
     */
    private $repository;

    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function visit($page_name)
    {
        $page = $this->repository->getPage($page_name);
        $fractal = new Manager();
        $resource = new Item($page, new PageTransformer());
        return JsonResponse::create($fractal->createData($resource));
    }
}
