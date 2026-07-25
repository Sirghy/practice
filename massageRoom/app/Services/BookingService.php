<?php


declare(strict_types=1);

namespace App\Services;

use App\DAL\Interfaces\BookingRepositoryInterface;
use App\Models\Booking;

class BookingService
{
    private BookingRepositoryInterface $bookingRep;

    public function __construct(BookingRepositoryInterface $bookingRep)
    {
        $this->bookingRep = $bookingRep;
    }

    public function getAllEvents(): array
    {
        return $this->bookingRep->getEvents();
    }
    public function createEvent(array $data): Booking
    {
        return $this->bookingRep->createBooking($data);
    }
}
