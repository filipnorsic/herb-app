<?php

namespace App\Services;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\searchClientRequest;
use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;

class ClientService
{
    public function getAllClients()
    {
            return Client::with ('user')->get();
    }

    public function getClientByName(searchClientRequest $request)

    {
        $data = $request->validated();

        return Client::where('first_name', 'like', '%' . $data['first_name'] . '%')
            ->orWhere('last_name', 'like', '%' . $data['last_name'] . '%')
            ->get();

    }

}
