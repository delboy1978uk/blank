<?php

namespace Del;

class BlankTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    /**
     * @var Bitcoin
     */
    protected $btc;

    protected function _before()
    {
        // create a fresh blank class before each test
        $this->btc = new Blank();
    }

    protected function _after()
    {
        // unset the blank class after each test
        unset($this->calc);
    }

    /**
     * Check tests are working
     */
    public function testBlah()
    {
	    $this->assertEquals('Ready to start building tests',$this->btc->blah());
    }


}
