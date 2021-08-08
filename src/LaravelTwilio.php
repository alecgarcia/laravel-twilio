<?php

namespace Alecgarcia\LaravelTwilio;

use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Api\V2010\Account\CallInstance;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
use Twilio\Rest\Client;
use Twilio\TwiML\TwiML;
use Twilio\TwiML\VoiceResponse;

class LaravelTwilio
{
    protected $sid;
    protected $token;
    protected $verifySSL;
    protected $twilio;

    public function __construct(string $sid, string $token, bool $verifySSL = true)
    {
        $this->sid = $sid;
        $this->token = $token;
        $this->verifySSL = $verifySSL;
    }

    public function getInstance()
    {
        if ($this->twilio) {
            return $this->twilio;
        }

        try {
            return $this->twilio = new Client($this->sid, $this->token);
        } catch (ConfigurationException $configurationException) {
            // TODO: Do something with the exception.
        }
    }

}
