<?php

namespace Galilee\PPM\SDK\DPS;

/**
 * Class Adobe.
 */
class Adobe
{
    /** @var Config\Settings $settings */
    public $settings;

    public function __construct(Config\Settings $settings)
    {
        $this->settings = $settings;
    }
}
