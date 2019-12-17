<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 11:31
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\RankEval;
//参考文档
//https://www.elastic.co/guide/en/elasticsearch/reference/6.7/search-rank-eval.html
class RankEvalTest extends Base
{
    public function test()
    {
        $bean = new RankEval();
        $bean->setIndex('my-index');
        $bean->setBody([
            'requests' => [
                [
                    'id' => '1',
                    'request' => ['query' => ['match' => ['text' => 'dadsa']]],
                    'ratings' => []
                ]
            ],
            'metric' => [
                'precision' => [
                    'k' => 20,
                    'relevant_rating_threshold' => 1,
                    'ignore_unlabeled' => false
                ]
            ]
        ]);
        $response = $this->getElasticSearch()->client()->rankEval($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertArrayHasKey('metric_score',$response);
    }
}