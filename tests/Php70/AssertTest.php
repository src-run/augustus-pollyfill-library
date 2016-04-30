<?php

/*
 * This file is part of the `augustus-polyfill-library` project.
 *
 * (c) 2016 Rob Frawley 2nd(rmf) <rmf AT src DOT run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Polyfill\Tests\Php70;

use SR\Polyfill\Php70\Assert;
use SR\Polyfill\Tests\Fixture\ErrorFixture;
use SR\Polyfill\Tests\Fixture\ExceptionPostPhp70Fixture;
use SR\Polyfill\Tests\Fixture\ExceptionPrePhp70Fixture;
use SR\Polyfill\Tests\Fixture\NotThrowableFixture;

/**
 * Class AssertTest.
 *
 * @package SR\Polyfill\Tests\Php70
 */
class AssertTest extends \PHPUnit_Framework_TestCase
{
    public function testAssertThrowableEquitable()
    {
        if (PHP_VERSION_ID < 70000) {
            $instance = new ExceptionPrePhp70Fixture();
            $this->assertTrue(Assert::throwableEquitable($instance));
        } else {
            $instance = new ExceptionPostPhp70Fixture();
            $this->assertTrue(Assert::throwableEquitable($instance));
        }

        $instance = new ErrorFixture();
        $this->assertTrue(Assert::throwableEquitable($instance));

        $instance = new NotThrowableFixture();
        $this->assertFalse(Assert::throwableEquitable($instance));

        $instance = new \Exception();
        $this->assertTrue(Assert::throwableEquitable($instance));

        $instance = new \Error();
        $this->assertTrue(Assert::throwableEquitable($instance));

        $instance = new \SplFileObject(__FILE__);
        $this->assertFalse(Assert::throwableEquitable($instance));
    }

    public function testAssertThrowableEquitableInvalidParameter()
    {
        $this->assertFalse(Assert::throwableEquitable('invalid-input'));
    }
}


/* EOF */
