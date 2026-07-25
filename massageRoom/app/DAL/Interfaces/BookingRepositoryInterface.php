<?php

declare(strict_types=1);

namespace App\DAL\Interfaces;

use App\Models\Booking;

interface BookingRepositoryInterface
{
    public function getEvents(): array;
    public function createBooking(array $data): Booking;
}
