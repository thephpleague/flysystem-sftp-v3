<?php

declare(strict_types=1);

namespace League\Flysystem\PhpseclibV3;

class UnableToConnect extends UnableToAuthenticate
{
    public static function disconnected(string $reason): UnableToConnect
    {
        return new UnableToConnect('Unable to authenticate using a password. Disconnected by application: ' . $reason);
    }
}
