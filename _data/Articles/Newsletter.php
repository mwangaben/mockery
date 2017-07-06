<?php

namespace Acme\Articles;

use Acme\Articles\Curl;

class Newsletter
{
    protected $curl;

    public function __construct(Curl $curl)
    { if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($curl), false)) !== __AM_CONTINUE__) return $__am_res; 
        $this->curl = $curl;
    }

    public function addToAList($user, $email)
    { if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($user, $email), false)) !== __AM_CONTINUE__) return $__am_res; 
        $data = [
            'email' => $email,
            'name'  => $user,
        ];
        return $this->curl->post($data);
    }

}
