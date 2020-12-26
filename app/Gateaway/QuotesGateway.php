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
    function getQuotes(int $quotesNum)
    {
        $quotes = $this->db->table('quotes')
            ->where('id', $quotesNum)
            ->first();

        if ($quotes) {
            return (array) $quotes;
        }

        return null;
    }
}
