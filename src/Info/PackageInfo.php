<?php declare(strict_types = 1);

namespace ApiGen\Info;


class PackageInfo implements ElementInfo
{

    /** @var array */
    public array $authors = [];

    /** @var string */
    public string $doc = "";

    /** @var string  */
    public string $packageName = "";

    /** @var bool */
    public bool $deprecated = false;


    public function isDeprecated(): bool
    {
        return $this->deprecated;
    }
}
