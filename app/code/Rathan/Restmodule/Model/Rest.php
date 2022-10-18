<?php
namespace Rathan\Restmodule\Model;
use Rathan\Restmodule\Api\RestInterface;
class Rest implements RestInterface
{
    /**
     * @return mixed|void
     */
    public function getInfo()
    {
       echo "hello";
       exit;
    }

    /**
     * @param $name
     * @return mixed|void
     */
    public function getName($name)
    {
       echo "Hi"."\t". $name;
       exit;
    }

    /**
     * @param $id
     * @return mixed|void
     */
    public function getPostValue($id)
    {
       echo "Id\t" . $id;
       exit;
    }
}
