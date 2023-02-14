<?php

namespace App\Observers;

use App\Models\Tipo;
use Illuminate\Support\Str;

class TipoObserver
{
    /**
     * Handle the Tipo "created" event.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return void
     */
    public function creating(Tipo $tipo)
    {
        $tipo->slug = Str::slug($tipo->nome);
    }

    /**
     * Handle the Tipo "updated" event.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return void
     */
    public function updated(Tipo $tipo)
    {
        //
    }

    /**
     * Handle the Tipo "deleted" event.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return void
     */
    public function deleted(Tipo $tipo)
    {
        //
    }

    /**
     * Handle the Tipo "restored" event.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return void
     */
    public function restored(Tipo $tipo)
    {
        //
    }

    /**
     * Handle the Tipo "force deleted" event.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return void
     */
    public function forceDeleted(Tipo $tipo)
    {
        //
    }
}
