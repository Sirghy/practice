<?php


declare(strict_types=1);

namespace App\DAL;

use App\DAL\Interfaces\BookingRepositoryInterface;
use App\Models\Booking;
use Exception;

class BookingRepository implements BookingRepositoryInterface
{
    public function getEvents(): array
    {
        return Booking::all()->map(function ($data) {
            return [
                'title' => $data->title,
                'start' => $data->start_time,
                'end'   => $data->end_time,
            ];
        })->toArray();
    }

    public function createBooking(array $data): Booking
    {
        return Booking::create($data);

    }
}
