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

    // Question
    function getQuotes()
    {
        $quotes = $this->db->table('quotes')->all()->random(1);

        return null;
    }
}
