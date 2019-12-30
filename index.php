<?php


abstract class onlineGateWay
{
    protected $options;

    public function __construct()
    {
        $this->options = [
            "mellat" => [
                'merchant' => '12345678',
                'username' => 'f2153',
                'password' => '9s8d74cc',
            ],
            "saman" => [
                'api_key' => 's984cvs98484c618a9s4f98e4a',
            ],
            "parsian" => [
                'username' => 'ddf22df13',
                'password' => '13df4da1fds2f',
            ],
        ];
    }

    abstract public function sendRequest();

    abstract public function verifyRequest();

}

class Mellat extends onlineGateWay
{

    private $gateWayName;
    private $mellat_options;

    public function __construct()
    {
        $this->gateWayName = 'mellat';
        parent::__construct();
        $this->mellat_options = $this->options[$this->gateWayName];
    }

    public function sendRequest()
    {
        var_dump($this->mellat_options);
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}


class Factory
{
    public static function make($class)
    {
        $className = ucfirst($class);

        if (!class_exists($className)) {
            return false;
        }
        return new $className;
    }
}

$gateway = Factory::make('mellat');
$gateway->sendRequest();

//**** test

