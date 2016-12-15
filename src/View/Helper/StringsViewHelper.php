<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 15/12/2016
 * Time: 09:03
 */

namespace Strings\View\Helper;

use Strings\Service\StringsService;
use Zend\View\Helper\AbstractHelper;

class StringsViewHelper extends AbstractHelper
{
    protected $strings_service;

    public function __construct(StringsService $stringsService)
    {
        $this->strings_service = $stringsService;
    }

    public function __invoke()
    {
        return $this->getStringsService();
    }

    /**
     * @return StringsService
     */
    public function getStringsService()
    {
        return $this->strings_service;
    }

    /**
     * @param StringsService $strings_service
     */
    public function setStringsService($strings_service)
    {
        $this->strings_service = $strings_service;
    }
}