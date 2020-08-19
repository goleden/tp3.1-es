<?php

/**
 * /Lib/Action/DemoAction.class.php
 */
class DemoAction extends Action
{
    public function index()
    {
        require __DIR__ . '/../../Es/Curd.php';

        echo '<pre>';
        // 新增、修改
        $client = new Curd([
            'localhost:9200' // es地址
        ], 'firstIndex');
        $response = $client->save('id' . rand(1, 10), [
            'id' => rand(1, 10),
            'title' => 'xxx',
            'title_real' => 'xxx',
            'content' => 'xxx'
        ]);
        print_r($response);

        // 搜索
        $results = $client->search('test', [
            [
                'field' => 'title',
                'boost' => 10 // 权重
            ],
            [
                'field' => 'title_real',
                'boost' => 10 // 权重
            ],
            [
                'field' => 'content',
                'boost' => 1
            ],
        ], 2, 10);
        print_r($results);

        // 删除
        $result = $client->delete(1);
        print_r($result);

        exit;
    }
}
