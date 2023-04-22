<?php

namespace Rats\Zkteco\Lib\Helper;

use Rats\Zkteco\Lib\ZKTeco;

class Door
{
    static public function unlock(ZKTeco $self, $delay)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_UNLOCK_DOOR;
        $command_string = pack("I", intval($delay) * 10);

        return $self->_command($command, $command_string);
    }
}
