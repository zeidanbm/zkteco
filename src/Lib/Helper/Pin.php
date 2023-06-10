<?php

namespace Bmz\Zkteco\Lib\Helper;

use Bmz\Zkteco\Zkteco;

class Pin
{
    /**
     * @param Zkteco $self
     * @return bool|mixed
     */
    static public function width(Zkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~PIN2Width';

        return $self->_command($command, $command_string);
    }
}
