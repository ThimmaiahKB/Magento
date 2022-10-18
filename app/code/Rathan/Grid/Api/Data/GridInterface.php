<?php
namespace Rathan\Grid\Api\Data;

interface GridInterface
{
  
    const ID                        = 'id';
    const FIRSTNAME                 = 'firstname';
    const LASTNAME                  = 'lastname';
    const EMAIL                     = 'email';
    const PHONE                     = 'phone';
  

    public function getId();

    public function getFirstname();

    public function getLastname();

    public function getEmail();

    public function getPhone();

    public function setFirstname($firstname);

    public function setLastname($lastname);

    public function setEmail($email);

    public function setPhone($phone);
}