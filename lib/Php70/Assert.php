<?php

/*
 * This file is part of the `src-run/augustus-exception-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 * (c) Scribe Inc      <scr@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Polyfill\Php70;

/**
 * Class Assert.
 */
final class Assert
{
    /**
     * @param object $instance
     *
     * @return bool
     */
    final public static function throwableEquitable($instance)
    {
        if (!is_object($instance)) {
            return false;
        }

        return $instance instanceof \Throwable || $instance instanceof \Error || $instance instanceof \Exception;
    }
}

/* EOF */
