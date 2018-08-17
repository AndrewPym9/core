<?php

namespace App\Events\Training;

use App\Models\Mship\Account;
use App\Models\Training\WaitingList;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AccountAddedToWaitingList
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $account;

    public $waitingList;

    public $staffUser;

    /**
     * Create a new event instance.
     *
     * @param Account $account
     * @param WaitingList $waitingList
     * @param Account $staffUser
     */
    public function __construct(Account $account, WaitingList $waitingList, Account $staffUser)
    {
        $this->account = $account;
        $this->waitingList = $waitingList;
        $this->staffUser = $staffUser;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}