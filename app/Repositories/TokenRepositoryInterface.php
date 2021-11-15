<?php

namespace App\Repositories;

interface TokenRepositoryInterface extends BaseRepositoryInterface
{
    public function fetch(): \Illuminate\Support\Collection;
    public function findByContractAddress(string $contractAddress): ?\App\Models\Token;
    public function getTokensByChain(string $chain): \Illuminate\Database\Eloquent\Collection;
    public function store(\Illuminate\Support\Collection $tokens): void;
}
