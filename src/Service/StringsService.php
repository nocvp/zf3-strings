<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 13.08.2016
 * Time: 11:08
 */

namespace Strings\Service;

/**
 * Class StringsService
 * @package Strings\Service
 */
class StringsService
{
    public function cropWords($text, $characterLimit = null, $wordLimit = null)
    {
        if (!empty($wordLimit)) {
            $words = explode(" ", $text);
            $words = array_slice($words, 0, $wordLimit);
            return implode(" ", $words);
        } else if (!empty($characterLimit)) {
            $words = explode(" ", mb_substr($text, 0, $characterLimit, 'UTF-8'));
            $words = array_pop($words);
            return implode(" ", $words);
        } else {
            throw new \Exception('Character or Word limit is needed.');
        }
    }
}