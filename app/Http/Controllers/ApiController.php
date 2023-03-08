<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    /**
     * Get clients by the company id
     */
    public function getClients(int $companyId)
    {
        $clients = Client::getByCompanyId($companyId);

        return response([
            'clients' => $clients
        ]);
    }

    /**
     * Get companies
     */
    public function getCompanies()
    {
        $companies = Company::paginate(20);

        return response([
            'clients' => $companies
        ]);
    }

    /**
     * Get client company
     */
    public function getClientCompany(int $clientId)
    {
        $client = Client::find($clientId);
        $company = $client->company;

        return response([
            'company' => $company
        ]);
    }
}
