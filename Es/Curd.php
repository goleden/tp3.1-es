<?php

use Elasticsearch\ClientBuilder;
use Elasticsearch\Client;

class Curd
{
    /**
     * @var Client
     */
    protected $client;
    
    /**
     * 索引名称
     * @var string
     */
    protected $index;
    protected $type;

    /**
     * 初始化
     *
     *     $client = new Curd(['127.0.0.1:9200'], 'index_name');
     *
     * @param array $hosts es地址
     * @param string $index 索引名称
     * @param string $type 类型
     */
    public function __construct($hosts, $index = 'default', $type = 'default')
    {
        if (empty($hosts)) {
            $hosts = [
                '127.0.0.1:9200'
            ];
        }
        $this->client = ClientBuilder::create()->setHosts($hosts)->build();
        $this->index = $index;
        $this->type = $type;
    }

    /**
     * 新增/修改，保存
     *
     * @param string $id 文档id
     * @param array $body 文档内容
     * @return void
     * @author guoruidian
     */
    public function save($id, $body)
    {
        $params = [
            'index' => $this->index,
            'type' => $this->type,
            'id' => $id,
            'body' => $body
        ];

        return $this->client->index($params);
    }

    /**
     * 搜索
     *
     * @param string $search，搜索词
     *
     * [
     *      [
     *          'fiels' => 'title', // 字段名称
     *          'boost' => 10 // 权重
     *      ],
     *      [
     *          'fiels' => 'title2', // 字段名称2
     *          'boost' => 5 // 权重2
     *      ]
     *  ]
     *
     * @param array $fields，查询字段
     * @param integer $page 页码，从第一页开始
     * @param integer $limit 每页行数
     * @return array
     */
    public function search($keyword, $fields, $page = 1, $limit = 10)
    {
        $body = [];
        if ($keyword && $fields) {
            foreach ($fields as $field) {
                $body['query']['bool']['should'][] = [
                    'match' => [
                        $field['field'] => [
                            'query' => $keyword,
                            'boost' => !empty($field['boost']) ? $field['boost'] : 1,
                        ],
                    ]
                ];
            }
            $body['query']['bool']['minimum_should_match'] = 1;
        }
        $page = $page > 1 ? $page : 1;
        $params = [
            'index' => $this->index,
            'type' => $this->type,
            'from' => ($page > 1 ? ($page - 1) : 0) * $limit,
            'size' => $limit,
            'body' => $body
        ];
        $results = $this->client->search($params);

        $result = [];
        if (!empty($results['hits']['hits'])) {
            foreach ($results['hits']['hits'] as $hits) {
                $source = $hits['_source'];
                $source['_id'] = $hits['_id'];
                $result[] = $source;
            }
        }

        return $result;
    }

    /**
     * 删除
     *
     * @param string $id
     * @return void
     * @author guoruidian
     */
    public function delete($id)
    {
        // 删除
        $params = [
            'index' => $this->index,
            'type' => $this->type,
            'id' => $id
        ];
        
        $response = $this->client->delete($params);

        return $response ? true : false;
    }
}
