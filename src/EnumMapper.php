<?php

namespace Devysm\EnumMapper;

use Exception;

class EnumMapper
{

    /**
     * @var array
     */
    private array $cases;
    /**
     * @var bool
     */
    private bool $uppercase = false;
    /**
     * @var bool
     */
    private bool $lowercase = false;


    /**
     * @param string $enum
     * @return $this
     * @throws Exception
     */
    public function setEnum(string $enum): EnumMapper
    {
        if (!enum_exists($enum)) throw new Exception("$enum is not defined.");

        $instance = (new self());
        $instance->cases = $enum::cases();
        return $instance;
    }

    /**
     * @return array
     */
    protected function cases(): array
    {
        return (new Filterable($this->cases, $this->parameters()))
            ->getCasesAfterFilter();
    }

    /**
     * @return array
     */
    protected function parameters(): array
    {
        return [
            'toUppercase' => $this->uppercase,
            'toLowercase' => $this->lowercase
        ];
    }

    /**
     * @return array
     */
    public function getCasesWithoutContext(): array
    {
        return array_column($this->cases(), 'key');
    }

    /**
     * @return array
     */
    public function getCasesWithContext(): array
    {
        return array_column($this->cases(), 'context', 'key');
    }

    /**
     * @return $this
     */
    public function toUppercase(): EnumMapper
    {
        $this->uppercase = !$this->uppercase;
        return $this;
    }

    /**
     * @return $this
     */
    public function toLowercase(): EnumMapper
    {
        $this->lowercase = !$this->lowercase;
        return $this;
    }

}
