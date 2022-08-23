<?php

declare(strict_types=1);

namespace App\Transfers;

final class LeadTransfer extends \Spatie\DataTransferObject\DataTransferObject
{
    public ?int $id;

    public string $first_name;

    public string $last_name;

    public string $email;

    public string $description;

    public string $phone;
}
