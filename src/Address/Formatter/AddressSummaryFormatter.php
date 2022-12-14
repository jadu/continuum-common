<?php

namespace Jadu\ContinuumCommon\Address\Formatter;

use Jadu\ContinuumCommon\Address\Contract\AddressInterface;
use Jadu\ContinuumCommon\Address\Contract\FormattableAddressInterface;

class AddressSummaryFormatter
{
    /**
     * @return string
     */
    public static function generateFromAddress(FormattableAddressInterface $address)
    {
        $summaryParts = [];

        if (AddressInterface::TYPE_PROPERTY === $address->getType()) {
            static::addPart($summaryParts, TitleCaseFormatter::format($address->getSaon()));
            static::addPart($summaryParts, TitleCaseFormatter::format($address->getPaon()));
        }

        static::addPart($summaryParts, TitleCaseFormatter::format($address->getStreet()));
        static::addPart($summaryParts, TitleCaseFormatter::format($address->getLocality()));
        static::addPart($summaryParts, TitleCaseFormatter::format($address->getTown()));
        static::addPart($summaryParts, TitleCaseFormatter::format($address->getPostTown()));
        static::addPart($summaryParts, $address->getPostCode());

        return implode(', ', $summaryParts);
    }

    /**
     * @param string $part
     */
    public static function addPart(array &$lines, $part)
    {
        $last = count($lines) - 1;
        if (!empty($lines) &&
            preg_match('/^[0-9].*/', $lines[$last]) &&
            false === strpos($lines[$last], ' ') &&
            !is_numeric($part)
        ) {
            $lines[$last] .= ' ' . trim($part);
        } elseif (!empty(trim($part)) && (
            empty($lines) || strtolower($lines[$last]) !== strtolower($part)
        )) {
            $lines[] = trim($part);
        }
    }
}
