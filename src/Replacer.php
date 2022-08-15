<?php

namespace Devysm\EnumMapper;

class Replacer
{

    /**
     * @var string
     */
    protected string $subject;
    /**
     * @var array
     */
    protected array $parameters = [];


    /**
     * @param string $subject
     * @param array $parameters
     */
    public function __construct(string $subject, array $parameters = [])
    {
        $this->subject = $subject;
        $this->parameters = $parameters;
        $this->replacer();
    }

    /**
     * @return void
     */
    protected function replacer(): void
    {
        $subject = str_replace('_', ' ', $this->subject);

        if (isset($this->parameters['toUppercase']) && $this->parameters['toUppercase']) {
            $this->subject = strtoupper($subject);
            return;
            
        } else if (isset($this->parameters['toLowercase']) && $this->parameters['toLowercase']) {
            $this->subject = strtolower($subject);
            return;
        }

        $this->subject = ucwords($subject);
    }

    /**
     * @return string
     */
    public function getContextAfterReplace(): string
    {
        return $this->subject;
    }
}
