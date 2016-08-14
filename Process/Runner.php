<?php

namespace Herosoft\Modules\Process;

use Herosoft\Modules\Contracts\RunableInterface;
use Herosoft\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \Herosoft\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \Herosoft\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
