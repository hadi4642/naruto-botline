<?php

namespace App\Gateway;

use Illuminate\Database\ConnectionInterface;

class QuestionGateway
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
        return $this->db->table('quotes')->get('text')->first();
    }
}
