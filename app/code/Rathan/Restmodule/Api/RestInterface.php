<?php
namespace Rathan\Restmodule\Api;
interface RestInterface
{
    /**
     * @return mixed
     */
    public function getInfo();

    /**
     * @param string $name
     * @return mixed
     */

    public function getName(string $name);

    /**
     * @param int $id
     * @return mixed
     */

    public function getPostValue(int $id);

}
