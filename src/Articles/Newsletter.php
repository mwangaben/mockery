<?php

namespace Acme\Articles;

use Acme\Articles\Curl;

class Newsletter
{
    protected $curl;

    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }

    public function addToAList($user, $email)
    {
        $data = [
            'email' => $email,
            'name'  => $user,
        ];
        return $this->curl->post($data);
    }

}
