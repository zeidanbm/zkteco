<?php

namespace Bmz\Zkteco\Lib\Helper;

use Bmz\Zkteco\Zkteco;

class Time
{
    /**
     * @param Zkteco $self
     * @param string $t Format: "Y-m-d H:i:s"
     * @return bool|mixed
     */
    static public function set(Zkteco $self, $t)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_SET_TIME;
        $command_string = pack('I', Util::encodeTime($t));

        return $self->_command($command, $command_string);
    }

    /**
     * @param Zkteco $self
     * @return bool|mixed
     */
    static public function get(Zkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_GET_TIME;
        $command_string = '';

        $ret = $self->_command($command, $command_string);

        if ($ret) {
            return Util::decodeTime(hexdec(Util::reverseHex(bin2hex($ret))));
        } else {
            return false;
        }
    }
}
