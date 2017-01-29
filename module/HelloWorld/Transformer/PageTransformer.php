<?php
namespace ModuleExample\HelloWorld;

use League\Fractal\TransformerAbstract;

class PageTransformer extends TransformerAbstract
{
    public function transform(Page $page)
    {
        return [
            'name' => $page->getName(),
            'visitCount' => $page->getVisited()
        ];
    }
}
