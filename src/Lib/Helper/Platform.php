<?php

namespace Bmz\Zkteco\Lib\Helper;

use Bmz\Zkteco\Zkteco;

class Platform
{
    /**
     * @param Zkteco $self
     * @return bool|mixed
     */
    static public function get(Zkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~Platform';

        return $self->_command($command, $command_string);
    }

    /**
     * @param Zkteco $self
     * @return bool|mixed
     */
    static public function getVersion(Zkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~ZKFPVersion';

        return $self->_command($command, $command_string);
    }
}
