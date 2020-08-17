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


        $results = $client->delete(1);
        print_r($results);

        exit;
    }
}
