<?php

namespace Tests\Unit;

use Codeception\Test\Unit;
use Del\Blank;

class BlankTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Blank
     */
    protected $blank;

    protected function _before()
    {
        // create a fresh blank class before each test
        $this->blank = new Blank();
    }

    protected function _after()
    {
        // unset the blank class after each test
        unset($this->blank);
    }

    /**
     * Check tests are working
     */
    public function testBlah()
    {
        $this->assertEquals('Ready to start building tests', $this->blank->blah());
    }


}
