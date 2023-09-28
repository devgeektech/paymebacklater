<?php

// app/Http/Controllers/PlaidController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TomorrowIdeas\Plaid\Plaid;

class PlaidController extends Controller
{
    protected $plaid;

    public function __construct(Plaid $plaid)
    {
        $this->plaid = $plaid;
    }

    public function retrieveTransactions()
    {
        $client = new \TomorrowIdeas\Plaid\Plaid([
            'client_id' => "64a88b4289f8b500199bbee6",
            'secret' =>"972a430238177f07ac6cc68d506ced",
            'public_key' =>"972a430238177f07ac6cc68d506ced",
            'environment' => "sandbox"
        ]);

        dd($client);

        // Use the $client instance to interact with Plaid API
    }

    // ... other Plaid-related methods
}
