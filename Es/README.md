

## es在windows上的安装

### 安装java

> 非必须，经查看并测试，新版本已内置java环境

#### 参考

https://baijiahao.baidu.com/s?id=1665558949449584473&wfr=spider&for=pc

命令行输入java -version，能成功即可



### 安装es

下载

运行bin/elasticsearch.bat文件

访问localhost:9200，能成功即可

#### 设置

配置文件：/config/elasticsearch.yml

```
path.data: /usr/xc/elasticsearch-data
```

### 运行代码

> 注意，需要先新增数据（建立索引），再查询。

#### 初始化

```
<?php

        // 初始化
        $client = new Curd([
            'localhost:9200' // es地址，如：localhost:9200
        ], 'firstIndex');
```


#### 新增数据

```
        $response = $client->save('id' . rand(1, 10), [
            'id' => rand(1, 10),
            'title' => 'xxx',
            'title_real' => 'xxx',
            'content' => 'xxx'
        ]);
        print_r($response);
```


#### 查询数据

```
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
```


#### 删除数据

```
        // 删除
        $result = $client->delete(1);
        print_r($result);
```


#### 更多

https://github.com/goleden/tp3.1-es/blob/master/Es/Curd.php


