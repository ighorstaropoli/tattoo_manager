<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Client;

class Appointment extends Model
{

    protected $dates = ['date'];

   /**
     * Get the user that owns the task.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function allOrdened()
    {
        return $this->orderBy('date', 'desc')
                    ->orderBy('hour', 'desc')
                    ->get();
    }

    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forClient(Client $client)
    {
        return $this->where('client_id', $client->id)
                    ->orderBy('date', 'desc')
                    ->orderBy('hour', 'desc')
                    ->get();
    }
}
