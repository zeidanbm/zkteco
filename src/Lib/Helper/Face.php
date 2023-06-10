<?php

namespace Bmz\Zkteco\Lib\Helper;

use Bmz\Zkteco\Zkteco;

class Face
{
    /**
     * @param Zkteco $self
     * @return bool|mixed
     */
    static public function on(Zkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = 'FaceFunOn';

        return $self->_command($command, $command_string);
    }
}
