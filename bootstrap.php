<?php

/*
 * This file is part of the `src-run/augustus-polyfill-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Polyfill;

use SR\Polyfill\Utility\Alias;

if (PHP_VERSION_ID < 70000) {
    Alias::toRootNamespace('SR\Polyfill\Php70\Throwable');
    Alias::toRootNamespace('SR\Polyfill\Php70\Error');
    Alias::toRootNamespace('SR\Polyfill\Php70\ArithmeticError');
    Alias::toRootNamespace('SR\Polyfill\Php70\AssertionError');
    Alias::toRootNamespace('SR\Polyfill\Php70\DivisionByZeroError');
    Alias::toRootNamespace('SR\Polyfill\Php70\ParseError');
    Alias::toRootNamespace('SR\Polyfill\Php70\TypeError');
}

/* EOF */
