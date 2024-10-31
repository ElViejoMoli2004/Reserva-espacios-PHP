<?php

namespace App\Observers;

use App\Models\Reserva;

class ReservaObserver
{
    /**
     * Handle the Reserva "created" event.
     */
    public function created(Reserva $reserva): void
    {
        
    }

    /**
     * Handle the Reserva "updated" event.
     */
    public function updated(Reserva $reserva): void
    {
        //
    }

    /**
     * Handle the Reserva "deleted" event.
     */
    public function deleted(Reserva $reserva): void
    {
        //
    }

    /**
     * Handle the Reserva "restored" event.
     */
    public function restored(Reserva $reserva): void
    {
        //
    }

    /**
     * Handle the Reserva "force deleted" event.
     */
    public function forceDeleted(Reserva $reserva): void
    {
        //
    }
}
