<?php

use Elasticsearch\ClientBuilder;

class IndexAction extends Action
{
    public function index()
    {
        require __DIR__ . '/../../Es/Curd.php';
        

        echo '<pre>';
        $client = new Curd([
            // 'elasticsearch:9200',
            '127.0.0.1:9200',
            // '172.16.109.135:9200',
        ], 'wiki');

        // 搜索
        $results = $client->search('落后就要挨打', [
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
        ], 0, 10);
        print_r($results);

        exit;

        // 插入数据
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $i = 1;
        $time = time();
        while ($i--) {
            $list = D('wiki_article1')->where('id > ' . $id)->limit(10)->select();
            if (empty($list)) {
                exit('finish');
            }
            foreach ($list as $key => $detail) {
                $id = $detail['id'];
                $client->save($detail['id'], [
                    'id' => $detail['id'],
                    'title' => $detail['title'],
                    'title_real' => $detail['title_real'],
                    'content' => $detail['content'],
                ]);
            }
            var_dump($id);
        }

        // echo time() - $time;

        // echo "<script>
        // window.location.href = '/?id=" . $id . "';
        // </script>";
    }
}
