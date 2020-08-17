<?php

use Elasticsearch\ClientBuilder;

class IndexAction extends Action
{
    public function index()
    {
        require __DIR__ . '/../../Es/Curd.php';
        
        echo '<pre>';
        $client = new Curd([
            'elasticsearch:9200'
        ]);
        $response = $client->save('id' . rand(1, 10), [
            'id' => rand(1, 10),
            'testField' => '中国人民共和国 中国 中',
            'testField2' => '中国人民共和国 中国 中'
        ]);
        print_r($response);

        
        $results = $client->search('中国', [
            [
                'field' => 'testField',
                'boost' => 3
            ],
            [
                'field' => 'testField2',
                'boost' => 1
            ],
        ]);
        print_r($results);

        exit;

        echo '<pre>';
        $client = ClientBuilder::create()->setHosts([
            'elasticsearch:9200'
        ])->build();

        // 新增
        $params = [
            'index' => 'my_index',
            'type' => 'my_type',
            // 'id' => 'id' . rand(1, 10),
            'body' => [
                'id' => rand(1, 10),
                'testField' => '中国人民共和国 中国 中',
                'testField2' => '中国人民共和国 中国 中'
            ]
        ];

        $response = $client->index($params);
        print_r($response);

        // 搜索
        $keyword = '中国';
        $params = [
            'index' => 'my_index',
            'type' => 'my_type',
            'from' => 0,
            'size' => 20,
            'body' => [
                'query' => [
                    'bool' => [
                        'should' => [
                            'match' => [
                                'testField' => [
                                    'query' => $keyword,
                                    'boost' => 3, // 权重大
                                ],
                            ],
                            'match' => [
                                'testField2' => [
                                    'query' => $keyword,
                                    'boost' => 2, // 权重大
                                ],
                            ]
                        ],
                        'minimum_should_match' => 1,
                    ]
                ]
            ]
        ];

        $results = $client->search($params);
        print_r($results);

        // // 删除
        // $params = [
        //     'index' => 'my_index',
        //     'type' => 'my_type',
        //     'id' => 'my_id5'
        // ];
        
        // $response = $client->delete($params);
        // var_dump($response);

        echo 123;
    }
}
