<?php
namespace TestCase\Controller;

class TimeLineTest extends \Tinitter\Test\Base
{
    public function testTitle()
    {
        $dom = $this->req_dom('/');
        $this->assertEquals('web eng', $dom->find('title', 0)->text);
        $this->assertEquals('テキスト', $dom->find('label', 1)->text);
    }
}