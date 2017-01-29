<?php
namespace ModuleExample\HelloWorld\Repository;

use Illuminate\Cache\Repository;
use ModuleExample\HelloWorld\Page;

class PageRepository
{
    /**
     * @var Repository
     */
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $page_name
     *
     * @return mixed
     */
    public function getPage($page_name)
    {
        return $this->repository->get($page_name, new Page($page_name));
    }

    /**
     * @param Page $page
     *
     * @return $this
     */
    public function savePage(Page $page)
    {
        $this->repository->put($page->getPageName(), $page);
        return $this;
    }
}
