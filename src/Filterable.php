<?php

namespace Devysm\EnumMapper;

class Filterable
{
    /**
     * @var array
     */
    protected array $cases = [];

    /**
     * @param $cases
     * @param array $parameters
     */
    public function __construct($cases, array $parameters = [])
    {
        if (empty($cases)) {
            return;
        }

        foreach ($cases as $case) :
            $this->cases[] = [
                'key' => $case->value,
                'context' => (new Replacer($case->value, $parameters))->getContextAfterReplace(),
            ];
        endforeach;
    }

    /**
     * @return array
     */
    public function getCasesAfterFilter(): array
    {
        return $this->cases;
    }
}
