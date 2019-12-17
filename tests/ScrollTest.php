<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 17:34
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Scroll;
use EasySwoole\ElasticSearch\RequestBean\Search;
//参考https://www.elastic.co/guide/cn/elasticsearch/guide/current/scroll.html
class ScrollTest extends Base
{
    public function test()
    {
        $sBean = new Search();
        $sBean->setIndex('my-index');
        $sBean->setScroll('1m');
        $sBean->setBody([
            'query' => [
                'match' => [
                    'test-field' => 'abd'
                ]
            ],
            'sort' => ['_doc'],
            'size' => 1
        ]);
        $sResponse = $this->getElasticSearch()->client()->search($sBean)->getBody();
        $sResponse = json_decode($sResponse, true);
        $bean = new Scroll();
        $bean->setScrollId($sResponse['_scroll_id']);//
        $bean->setScroll('1m');
        $response = $this->getElasticSearch()->client()->scroll($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}