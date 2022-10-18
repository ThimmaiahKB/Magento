<?php
namespace Rathan\Display\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                   = 'id';
    const NAME                 = 'name';
    
    /**#@-*/


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName();

    
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setName($name);

   

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}