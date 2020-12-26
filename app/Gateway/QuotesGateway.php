<?php

namespace App\Gateway;

use Illuminate\Database\ConnectionInterface;

class QuotesGateway
{
    /**
     * @var ConnectionInterface
     */
    private $db;

    public function __construct()
    {
        $this->db = app('db');
    }

    // Quotes
    function getQuotes()
    {
        $quotes = $this->db->table('quotes')
        ->get('text')
        ->random();

        if ($quotes) {
            return (array) $quotes;
        }

        return null;
    }
}
