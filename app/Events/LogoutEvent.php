<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LogoutEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $user;
    protected $ip;
    protected $timestamp;
    protected $type;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $ip, $timestamp, $type='0')
    {
        $this->user = $user;
        $this->ip = $ip;
        $this->timestamp = $timestamp;
        $this->type = (string) $type;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getType()
    {
        return $this->type;
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
