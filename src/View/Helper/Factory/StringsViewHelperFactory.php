<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 15/12/2016
 * Time: 09:02
 */

namespace Strings\View\Helper\Factory;

use Strings\Service\StringsService;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Strings\View\Helper\StringsViewHelper;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class StringsViewHelperFactory implements FactoryInterface
{
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $stringsService = $container->get(StringsService::class);

        return new StringsViewHelper($stringsService);
    }
}