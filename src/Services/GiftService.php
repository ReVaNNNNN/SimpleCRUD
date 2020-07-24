<?php


namespace App\Services;


use Psr\Log\LoggerInterface;

class GiftService
{
    public $gifts = ['flowers', 'money', 'sweets', 'book'];

    public function __construct(LoggerInterface $logger)
    {
        $logger->info('Gifts were randomized');
        shuffle($this->gifts);
    }
}