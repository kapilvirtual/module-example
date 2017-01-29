<?php
namespace ModuleExample\HelloWorld;

use Serializable;

class Page implements Serializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $visited = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function visit()
    {
        $this->visited++;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getVisited()
    {
        return $this->visited;
    }

    /**
     * String representation of object
     * @link  http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize([
            'name' => $this->name,
            'visted' => $this->visited
        ]);
    }

    /**
     * Constructs the object
     * @link  http://php.net/manual/en/serializable.unserialize.php
     *
     * @param string $serialized <p>
     *                           The string representation of the object.
     *                           </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        $page_array = unserialize($serialized);
        $this->name = $page_array['name'];
        $this->visited = $page_array['visited'];
    }
}
