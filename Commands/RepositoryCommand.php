<?php

namespace Herosoft\Modules\Commands;

use Herosoft\Modules\Stub;
use Herosoft\Modules\Traits\ModuleCommandTrait;
use Symfony\Component\Console\Input\InputArgument;

class ServiceCommand extends GeneratorCommand
{
    use ModuleCommandTrait;

    /**
     * The name of argument being used.
     *
     * @var string
     */
    protected $argumentName = 'repository';

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'module:make-repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new restful repository for the specified module.';

    /**
     * Get repository name.
     *
     * @return string
     */
    public function getDestinationFilePath()
    {
        $path = $this->laravel['modules']->getModulePath($this->getModuleName());

        $servicePath = $this->laravel['modules']->config('paths.generator.repository');

        return $path.$servicePath.'/'.$this->getServiceName().'.php';
    }

    /**
     * @return Stub
     */
    protected function getTemplateContents()
    {
        $module = $this->laravel['modules']->findOrFail($this->getModuleName());

        return (new Stub('/repository.stub', [
            'MODULENAME'        => $module->getStudlyName(),
            'CONTROLLERNAME'    => $this->getServiceName(),
            'NAMESPACE'         => $module->getStudlyName(),
            'CLASS_NAMESPACE'   => $this->getClassNamespace($module),
            'CLASS'             => $this->getClass(),
            'LOWER_NAME'        => $module->getLowerName(),
            'MODULE'            => $this->getModuleName(),
            'NAME'              => $this->getModuleName(),
            'STUDLY_NAME'       => $module->getStudlyName(),
            'MODULE_NAMESPACE'  => $this->laravel['modules']->config('namespace'),
        ]))->render();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('repository', InputArgument::REQUIRED, 'The name of the repository class.'),
            array('module', InputArgument::OPTIONAL, 'The name of module will be used.'),
        );
    }

    /**
     * @return array|string
     */
    protected function getServiceName()
    {
        $service = studly_case($this->argument('repository'));

        if (!str_contains(strtolower($service), 'repository')) {
            $service = $service.'Repository';
        }

        return $service;
    }

    /**
     * Get default namespace.
     *
     * @return string
     */
    public function getDefaultNamespace()
    {
        return 'Repository';
    }
}
