<?php

namespace Bmz\Zkteco\Lib\Helper;

use Bmz\Zkteco\Zkteco;

class Door
{
    static public function unlock(Zkteco $self, $delay)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_UNLOCK_DOOR;
        $command_string = pack("I", intval($delay) * 10);

        return $self->_command($command, $command_string);
    }
}
