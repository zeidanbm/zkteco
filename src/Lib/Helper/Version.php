<?php

namespace Bmz\Zkteco\Lib\Helper;;

use Bmz\Zkteco\Lib\Helper\Util;
use Bmz\Zkteco\Zkteco;

class Version
{
    /**
     * @param ZKTeco $self
     * @return bool|mixed
     */
    static public function get(Zkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_VERSION;
        $command_string = '';

        return $self->_command($command, $command_string);
    }
}
