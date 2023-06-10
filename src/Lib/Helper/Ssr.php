<?php

namespace Bmz\Zkteco\Lib\Helper;

use Bmz\Zkteco\Zkteco;

class Ssr
{
    /**
     * @param Zkteco $self
     * @return bool|mixed
     */
    static public function get(Zkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~SSR';

        return $self->_command($command, $command_string);
    }
}
