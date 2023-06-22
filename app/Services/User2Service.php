<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service{
use ConsumesExternalService;

public $baseUri;

public function __construct()
    {
    $this->baseUri = config('services.users2.base_uri');
    }

    public function obtainUsers2()
    {
    return $this->performRequest('GET','/users');
    }

    public function createUser2($data)
    {
    return $this->performRequest('POST', '/creausers', $data);
    }    

    public function obtainUser2($id)
    {
    return $this->performRequest('GET',"/users/{$id}");
    }

    public function editUser2($data, $id)
    {
    return $this->performRequest('PUT',"/updusers/{$id}", $data);
    }

    public function deleteUser2($id)
    {
    return $this->performRequest('DELETE', "/delusers/{$id}");
    }
    
    public function obtainUsersjob2()
    {
    return $this->performRequest('GET','/usersjob');
    }

    public function obtainUserjob2($id)
    {
    return $this->performRequest('GET',"/userjob/{$id}");
    }
    
}