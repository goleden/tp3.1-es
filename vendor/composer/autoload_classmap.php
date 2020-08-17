<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Elasticsearch\\Client' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Client.php',
    'Elasticsearch\\ClientBuilder' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ClientBuilder.php',
    'Elasticsearch\\Common\\EmptyLogger' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/EmptyLogger.php',
    'Elasticsearch\\Common\\Exceptions\\AlreadyExpiredException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/AlreadyExpiredException.php',
    'Elasticsearch\\Common\\Exceptions\\BadMethodCallException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/BadMethodCallException.php',
    'Elasticsearch\\Common\\Exceptions\\BadRequest400Exception' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/BadRequest400Exception.php',
    'Elasticsearch\\Common\\Exceptions\\ClientErrorResponseException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/ClientErrorResponseException.php',
    'Elasticsearch\\Common\\Exceptions\\Conflict409Exception' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/Conflict409Exception.php',
    'Elasticsearch\\Common\\Exceptions\\Curl\\CouldNotConnectToHost' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/Curl/CouldNotConnectToHost.php',
    'Elasticsearch\\Common\\Exceptions\\Curl\\CouldNotResolveHostException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/Curl/CouldNotResolveHostException.php',
    'Elasticsearch\\Common\\Exceptions\\Curl\\OperationTimeoutException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/Curl/OperationTimeoutException.php',
    'Elasticsearch\\Common\\Exceptions\\ElasticsearchException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/ElasticsearchException.php',
    'Elasticsearch\\Common\\Exceptions\\Forbidden403Exception' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/Forbidden403Exception.php',
    'Elasticsearch\\Common\\Exceptions\\InvalidArgumentException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/InvalidArgumentException.php',
    'Elasticsearch\\Common\\Exceptions\\MaxRetriesException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/MaxRetriesException.php',
    'Elasticsearch\\Common\\Exceptions\\Missing404Exception' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/Missing404Exception.php',
    'Elasticsearch\\Common\\Exceptions\\NoDocumentsToGetException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/NoDocumentsToGetException.php',
    'Elasticsearch\\Common\\Exceptions\\NoNodesAvailableException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/NoNodesAvailableException.php',
    'Elasticsearch\\Common\\Exceptions\\NoShardAvailableException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/NoShardAvailableException.php',
    'Elasticsearch\\Common\\Exceptions\\RequestTimeout408Exception' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/RequestTimeout408Exception.php',
    'Elasticsearch\\Common\\Exceptions\\RoutingMissingException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/RoutingMissingException.php',
    'Elasticsearch\\Common\\Exceptions\\RuntimeException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/RuntimeException.php',
    'Elasticsearch\\Common\\Exceptions\\ScriptLangNotSupportedException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/ScriptLangNotSupportedException.php',
    'Elasticsearch\\Common\\Exceptions\\Serializer\\JsonErrorException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/Serializer/JsonErrorException.php',
    'Elasticsearch\\Common\\Exceptions\\ServerErrorResponseException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/ServerErrorResponseException.php',
    'Elasticsearch\\Common\\Exceptions\\TransportException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/TransportException.php',
    'Elasticsearch\\Common\\Exceptions\\UnexpectedValueException' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Common/Exceptions/UnexpectedValueException.php',
    'Elasticsearch\\ConnectionPool\\AbstractConnectionPool' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/AbstractConnectionPool.php',
    'Elasticsearch\\ConnectionPool\\ConnectionPoolInterface' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/ConnectionPoolInterface.php',
    'Elasticsearch\\ConnectionPool\\Selectors\\RandomSelector' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/Selectors/RandomSelector.php',
    'Elasticsearch\\ConnectionPool\\Selectors\\RoundRobinSelector' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/Selectors/RoundRobinSelector.php',
    'Elasticsearch\\ConnectionPool\\Selectors\\SelectorInterface' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/Selectors/SelectorInterface.php',
    'Elasticsearch\\ConnectionPool\\Selectors\\StickyRoundRobinSelector' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/Selectors/StickyRoundRobinSelector.php',
    'Elasticsearch\\ConnectionPool\\SimpleConnectionPool' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/SimpleConnectionPool.php',
    'Elasticsearch\\ConnectionPool\\SniffingConnectionPool' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/SniffingConnectionPool.php',
    'Elasticsearch\\ConnectionPool\\StaticConnectionPool' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/StaticConnectionPool.php',
    'Elasticsearch\\ConnectionPool\\StaticNoPingConnectionPool' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/StaticNoPingConnectionPool.php',
    'Elasticsearch\\Connections\\Connection' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Connections/Connection.php',
    'Elasticsearch\\Connections\\ConnectionFactory' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Connections/ConnectionFactory.php',
    'Elasticsearch\\Connections\\ConnectionFactoryInterface' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Connections/ConnectionFactoryInterface.php',
    'Elasticsearch\\Connections\\ConnectionInterface' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Connections/ConnectionInterface.php',
    'Elasticsearch\\Endpoints\\AbstractEndpoint' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/AbstractEndpoint.php',
    'Elasticsearch\\Endpoints\\Bulk' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Bulk.php',
    'Elasticsearch\\Endpoints\\BulkEndpointInterface' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/BulkEndpointInterface.php',
    'Elasticsearch\\Endpoints\\Cat\\Aliases' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Aliases.php',
    'Elasticsearch\\Endpoints\\Cat\\Allocation' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Allocation.php',
    'Elasticsearch\\Endpoints\\Cat\\Count' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Count.php',
    'Elasticsearch\\Endpoints\\Cat\\Fielddata' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Fielddata.php',
    'Elasticsearch\\Endpoints\\Cat\\Health' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Health.php',
    'Elasticsearch\\Endpoints\\Cat\\Help' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Help.php',
    'Elasticsearch\\Endpoints\\Cat\\Indices' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Indices.php',
    'Elasticsearch\\Endpoints\\Cat\\Master' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Master.php',
    'Elasticsearch\\Endpoints\\Cat\\NodeAttrs' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/NodeAttrs.php',
    'Elasticsearch\\Endpoints\\Cat\\Nodes' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Nodes.php',
    'Elasticsearch\\Endpoints\\Cat\\PendingTasks' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/PendingTasks.php',
    'Elasticsearch\\Endpoints\\Cat\\Plugins' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Plugins.php',
    'Elasticsearch\\Endpoints\\Cat\\Recovery' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Recovery.php',
    'Elasticsearch\\Endpoints\\Cat\\Repositories' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Repositories.php',
    'Elasticsearch\\Endpoints\\Cat\\Segments' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Segments.php',
    'Elasticsearch\\Endpoints\\Cat\\Shards' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Shards.php',
    'Elasticsearch\\Endpoints\\Cat\\Snapshots' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Snapshots.php',
    'Elasticsearch\\Endpoints\\Cat\\Tasks' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Tasks.php',
    'Elasticsearch\\Endpoints\\Cat\\Templates' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/Templates.php',
    'Elasticsearch\\Endpoints\\Cat\\ThreadPool' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cat/ThreadPool.php',
    'Elasticsearch\\Endpoints\\ClearScroll' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/ClearScroll.php',
    'Elasticsearch\\Endpoints\\Cluster\\AllocationExplain' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/AllocationExplain.php',
    'Elasticsearch\\Endpoints\\Cluster\\Health' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Health.php',
    'Elasticsearch\\Endpoints\\Cluster\\Nodes\\AbstractNodesEndpoint' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Nodes/AbstractNodesEndpoint.php',
    'Elasticsearch\\Endpoints\\Cluster\\Nodes\\HotThreads' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Nodes/HotThreads.php',
    'Elasticsearch\\Endpoints\\Cluster\\Nodes\\Info' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Nodes/Info.php',
    'Elasticsearch\\Endpoints\\Cluster\\Nodes\\Shutdown' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Nodes/Shutdown.php',
    'Elasticsearch\\Endpoints\\Cluster\\Nodes\\Stats' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Nodes/Stats.php',
    'Elasticsearch\\Endpoints\\Cluster\\PendingTasks' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/PendingTasks.php',
    'Elasticsearch\\Endpoints\\Cluster\\Reroute' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Reroute.php',
    'Elasticsearch\\Endpoints\\Cluster\\Settings\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Settings/Get.php',
    'Elasticsearch\\Endpoints\\Cluster\\Settings\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Settings/Put.php',
    'Elasticsearch\\Endpoints\\Cluster\\State' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/State.php',
    'Elasticsearch\\Endpoints\\Cluster\\Stats' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Cluster/Stats.php',
    'Elasticsearch\\Endpoints\\Count' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Count.php',
    'Elasticsearch\\Endpoints\\CountPercolate' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/CountPercolate.php',
    'Elasticsearch\\Endpoints\\Create' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Create.php',
    'Elasticsearch\\Endpoints\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Delete.php',
    'Elasticsearch\\Endpoints\\DeleteByQuery' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/DeleteByQuery.php',
    'Elasticsearch\\Endpoints\\Exists' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Exists.php',
    'Elasticsearch\\Endpoints\\Explain' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Explain.php',
    'Elasticsearch\\Endpoints\\FieldCaps' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/FieldCaps.php',
    'Elasticsearch\\Endpoints\\FieldStats' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/FieldStats.php',
    'Elasticsearch\\Endpoints\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Get.php',
    'Elasticsearch\\Endpoints\\Index' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Index.php',
    'Elasticsearch\\Endpoints\\Indices\\Alias\\AbstractAliasEndpoint' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Alias/AbstractAliasEndpoint.php',
    'Elasticsearch\\Endpoints\\Indices\\Alias\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Alias/Delete.php',
    'Elasticsearch\\Endpoints\\Indices\\Alias\\Exists' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Alias/Exists.php',
    'Elasticsearch\\Endpoints\\Indices\\Alias\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Alias/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Alias\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Alias/Put.php',
    'Elasticsearch\\Endpoints\\Indices\\Aliases\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Aliases/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Aliases\\Update' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Aliases/Update.php',
    'Elasticsearch\\Endpoints\\Indices\\Analyze' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Analyze.php',
    'Elasticsearch\\Endpoints\\Indices\\Cache\\Clear' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Cache/Clear.php',
    'Elasticsearch\\Endpoints\\Indices\\ClearCache' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/ClearCache.php',
    'Elasticsearch\\Endpoints\\Indices\\Close' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Close.php',
    'Elasticsearch\\Endpoints\\Indices\\Create' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Create.php',
    'Elasticsearch\\Endpoints\\Indices\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Delete.php',
    'Elasticsearch\\Endpoints\\Indices\\Exists' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Exists.php',
    'Elasticsearch\\Endpoints\\Indices\\Exists\\Types' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Exists/Types.php',
    'Elasticsearch\\Endpoints\\Indices\\Field\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Field/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Flush' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Flush.php',
    'Elasticsearch\\Endpoints\\Indices\\ForceMerge' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/ForceMerge.php',
    'Elasticsearch\\Endpoints\\Indices\\Gateway\\Snapshot' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Gateway/Snapshot.php',
    'Elasticsearch\\Endpoints\\Indices\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Mapping\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Mapping/Delete.php',
    'Elasticsearch\\Endpoints\\Indices\\Mapping\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Mapping/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Mapping\\GetField' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Mapping/GetField.php',
    'Elasticsearch\\Endpoints\\Indices\\Mapping\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Mapping/Put.php',
    'Elasticsearch\\Endpoints\\Indices\\Open' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Open.php',
    'Elasticsearch\\Endpoints\\Indices\\Recovery' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Recovery.php',
    'Elasticsearch\\Endpoints\\Indices\\Refresh' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Refresh.php',
    'Elasticsearch\\Endpoints\\Indices\\Rollover' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Rollover.php',
    'Elasticsearch\\Endpoints\\Indices\\Seal' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Seal.php',
    'Elasticsearch\\Endpoints\\Indices\\Segments' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Segments.php',
    'Elasticsearch\\Endpoints\\Indices\\Settings\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Settings/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Settings\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Settings/Put.php',
    'Elasticsearch\\Endpoints\\Indices\\ShardStores' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/ShardStores.php',
    'Elasticsearch\\Endpoints\\Indices\\Shrink' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Shrink.php',
    'Elasticsearch\\Endpoints\\Indices\\Snapshotindex' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Snapshotindex.php',
    'Elasticsearch\\Endpoints\\Indices\\Stats' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Stats.php',
    'Elasticsearch\\Endpoints\\Indices\\Status' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Status.php',
    'Elasticsearch\\Endpoints\\Indices\\Template\\AbstractTemplateEndpoint' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Template/AbstractTemplateEndpoint.php',
    'Elasticsearch\\Endpoints\\Indices\\Template\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Template/Delete.php',
    'Elasticsearch\\Endpoints\\Indices\\Template\\Exists' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Template/Exists.php',
    'Elasticsearch\\Endpoints\\Indices\\Template\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Template/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Template\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Template/Put.php',
    'Elasticsearch\\Endpoints\\Indices\\Type\\Exists' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Type/Exists.php',
    'Elasticsearch\\Endpoints\\Indices\\Upgrade\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Upgrade/Get.php',
    'Elasticsearch\\Endpoints\\Indices\\Upgrade\\Post' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Upgrade/Post.php',
    'Elasticsearch\\Endpoints\\Indices\\ValidateQuery' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/ValidateQuery.php',
    'Elasticsearch\\Endpoints\\Indices\\Validate\\Query' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Indices/Validate/Query.php',
    'Elasticsearch\\Endpoints\\Info' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Info.php',
    'Elasticsearch\\Endpoints\\Ingest\\Pipeline\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Ingest/Pipeline/Delete.php',
    'Elasticsearch\\Endpoints\\Ingest\\Pipeline\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Ingest/Pipeline/Get.php',
    'Elasticsearch\\Endpoints\\Ingest\\Pipeline\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Ingest/Pipeline/Put.php',
    'Elasticsearch\\Endpoints\\Ingest\\Simulate' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Ingest/Simulate.php',
    'Elasticsearch\\Endpoints\\MPercolate' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/MPercolate.php',
    'Elasticsearch\\Endpoints\\MTermVectors' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/MTermVectors.php',
    'Elasticsearch\\Endpoints\\Mget' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Mget.php',
    'Elasticsearch\\Endpoints\\Msearch' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Msearch.php',
    'Elasticsearch\\Endpoints\\MsearchTemplate' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/MsearchTemplate.php',
    'Elasticsearch\\Endpoints\\Percolate' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Percolate.php',
    'Elasticsearch\\Endpoints\\Ping' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Ping.php',
    'Elasticsearch\\Endpoints\\Reindex' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Reindex.php',
    'Elasticsearch\\Endpoints\\Remote\\Info' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Remote/Info.php',
    'Elasticsearch\\Endpoints\\RenderSearchTemplate' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/RenderSearchTemplate.php',
    'Elasticsearch\\Endpoints\\Script\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Script/Delete.php',
    'Elasticsearch\\Endpoints\\Script\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Script/Get.php',
    'Elasticsearch\\Endpoints\\Script\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Script/Put.php',
    'Elasticsearch\\Endpoints\\Scroll' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Scroll.php',
    'Elasticsearch\\Endpoints\\Search' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Search.php',
    'Elasticsearch\\Endpoints\\SearchShards' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/SearchShards.php',
    'Elasticsearch\\Endpoints\\SearchTemplate' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/SearchTemplate.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Create' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Create.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Delete.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Get.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Repository\\Create' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Repository/Create.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Repository\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Repository/Delete.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Repository\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Repository/Get.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Repository\\Verify' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Repository/Verify.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Restore' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Restore.php',
    'Elasticsearch\\Endpoints\\Snapshot\\Status' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Snapshot/Status.php',
    'Elasticsearch\\Endpoints\\Source\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Source/Get.php',
    'Elasticsearch\\Endpoints\\Suggest' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Suggest.php',
    'Elasticsearch\\Endpoints\\Tasks\\Cancel' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Tasks/Cancel.php',
    'Elasticsearch\\Endpoints\\Tasks\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Tasks/Get.php',
    'Elasticsearch\\Endpoints\\Tasks\\TasksList' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Tasks/TasksList.php',
    'Elasticsearch\\Endpoints\\Template\\Delete' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Template/Delete.php',
    'Elasticsearch\\Endpoints\\Template\\Get' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Template/Get.php',
    'Elasticsearch\\Endpoints\\Template\\Put' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Template/Put.php',
    'Elasticsearch\\Endpoints\\TermVectors' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/TermVectors.php',
    'Elasticsearch\\Endpoints\\Update' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/Update.php',
    'Elasticsearch\\Endpoints\\UpdateByQuery' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Endpoints/UpdateByQuery.php',
    'Elasticsearch\\Helper\\Iterators\\SearchHitIterator' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Helper/Iterators/SearchHitIterator.php',
    'Elasticsearch\\Helper\\Iterators\\SearchResponseIterator' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Helper/Iterators/SearchResponseIterator.php',
    'Elasticsearch\\Namespaces\\AbstractNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/AbstractNamespace.php',
    'Elasticsearch\\Namespaces\\BooleanRequestWrapper' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/BooleanRequestWrapper.php',
    'Elasticsearch\\Namespaces\\CatNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/CatNamespace.php',
    'Elasticsearch\\Namespaces\\ClusterNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/ClusterNamespace.php',
    'Elasticsearch\\Namespaces\\IndicesNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/IndicesNamespace.php',
    'Elasticsearch\\Namespaces\\IngestNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/IngestNamespace.php',
    'Elasticsearch\\Namespaces\\NamespaceBuilderInterface' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/NamespaceBuilderInterface.php',
    'Elasticsearch\\Namespaces\\NodesNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/NodesNamespace.php',
    'Elasticsearch\\Namespaces\\RemoteNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/RemoteNamespace.php',
    'Elasticsearch\\Namespaces\\SnapshotNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/SnapshotNamespace.php',
    'Elasticsearch\\Namespaces\\TasksNamespace' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Namespaces/TasksNamespace.php',
    'Elasticsearch\\Serializers\\ArrayToJSONSerializer' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Serializers/ArrayToJSONSerializer.php',
    'Elasticsearch\\Serializers\\EverythingToJSONSerializer' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Serializers/EverythingToJSONSerializer.php',
    'Elasticsearch\\Serializers\\SerializerInterface' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Serializers/SerializerInterface.php',
    'Elasticsearch\\Serializers\\SmartSerializer' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Serializers/SmartSerializer.php',
    'Elasticsearch\\Transport' => $vendorDir . '/elasticsearch/elasticsearch/src/Elasticsearch/Transport.php',
    'GuzzleHttp\\Ring\\Client\\ClientUtils' => $vendorDir . '/guzzlehttp/ringphp/src/Client/ClientUtils.php',
    'GuzzleHttp\\Ring\\Client\\CurlFactory' => $vendorDir . '/guzzlehttp/ringphp/src/Client/CurlFactory.php',
    'GuzzleHttp\\Ring\\Client\\CurlHandler' => $vendorDir . '/guzzlehttp/ringphp/src/Client/CurlHandler.php',
    'GuzzleHttp\\Ring\\Client\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/ringphp/src/Client/CurlMultiHandler.php',
    'GuzzleHttp\\Ring\\Client\\Middleware' => $vendorDir . '/guzzlehttp/ringphp/src/Client/Middleware.php',
    'GuzzleHttp\\Ring\\Client\\MockHandler' => $vendorDir . '/guzzlehttp/ringphp/src/Client/MockHandler.php',
    'GuzzleHttp\\Ring\\Client\\StreamHandler' => $vendorDir . '/guzzlehttp/ringphp/src/Client/StreamHandler.php',
    'GuzzleHttp\\Ring\\Core' => $vendorDir . '/guzzlehttp/ringphp/src/Core.php',
    'GuzzleHttp\\Ring\\Exception\\CancelledException' => $vendorDir . '/guzzlehttp/ringphp/src/Exception/CancelledException.php',
    'GuzzleHttp\\Ring\\Exception\\CancelledFutureAccessException' => $vendorDir . '/guzzlehttp/ringphp/src/Exception/CancelledFutureAccessException.php',
    'GuzzleHttp\\Ring\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/ringphp/src/Exception/ConnectException.php',
    'GuzzleHttp\\Ring\\Exception\\RingException' => $vendorDir . '/guzzlehttp/ringphp/src/Exception/RingException.php',
    'GuzzleHttp\\Ring\\Future\\BaseFutureTrait' => $vendorDir . '/guzzlehttp/ringphp/src/Future/BaseFutureTrait.php',
    'GuzzleHttp\\Ring\\Future\\CompletedFutureArray' => $vendorDir . '/guzzlehttp/ringphp/src/Future/CompletedFutureArray.php',
    'GuzzleHttp\\Ring\\Future\\CompletedFutureValue' => $vendorDir . '/guzzlehttp/ringphp/src/Future/CompletedFutureValue.php',
    'GuzzleHttp\\Ring\\Future\\FutureArray' => $vendorDir . '/guzzlehttp/ringphp/src/Future/FutureArray.php',
    'GuzzleHttp\\Ring\\Future\\FutureArrayInterface' => $vendorDir . '/guzzlehttp/ringphp/src/Future/FutureArrayInterface.php',
    'GuzzleHttp\\Ring\\Future\\FutureInterface' => $vendorDir . '/guzzlehttp/ringphp/src/Future/FutureInterface.php',
    'GuzzleHttp\\Ring\\Future\\FutureValue' => $vendorDir . '/guzzlehttp/ringphp/src/Future/FutureValue.php',
    'GuzzleHttp\\Ring\\Future\\MagicFutureTrait' => $vendorDir . '/guzzlehttp/ringphp/src/Future/MagicFutureTrait.php',
    'GuzzleHttp\\Stream\\AppendStream' => $vendorDir . '/guzzlehttp/streams/src/AppendStream.php',
    'GuzzleHttp\\Stream\\AsyncReadStream' => $vendorDir . '/guzzlehttp/streams/src/AsyncReadStream.php',
    'GuzzleHttp\\Stream\\BufferStream' => $vendorDir . '/guzzlehttp/streams/src/BufferStream.php',
    'GuzzleHttp\\Stream\\CachingStream' => $vendorDir . '/guzzlehttp/streams/src/CachingStream.php',
    'GuzzleHttp\\Stream\\DroppingStream' => $vendorDir . '/guzzlehttp/streams/src/DroppingStream.php',
    'GuzzleHttp\\Stream\\Exception\\CannotAttachException' => $vendorDir . '/guzzlehttp/streams/src/Exception/CannotAttachException.php',
    'GuzzleHttp\\Stream\\Exception\\SeekException' => $vendorDir . '/guzzlehttp/streams/src/Exception/SeekException.php',
    'GuzzleHttp\\Stream\\FnStream' => $vendorDir . '/guzzlehttp/streams/src/FnStream.php',
    'GuzzleHttp\\Stream\\GuzzleStreamWrapper' => $vendorDir . '/guzzlehttp/streams/src/GuzzleStreamWrapper.php',
    'GuzzleHttp\\Stream\\InflateStream' => $vendorDir . '/guzzlehttp/streams/src/InflateStream.php',
    'GuzzleHttp\\Stream\\LazyOpenStream' => $vendorDir . '/guzzlehttp/streams/src/LazyOpenStream.php',
    'GuzzleHttp\\Stream\\LimitStream' => $vendorDir . '/guzzlehttp/streams/src/LimitStream.php',
    'GuzzleHttp\\Stream\\MetadataStreamInterface' => $vendorDir . '/guzzlehttp/streams/src/MetadataStreamInterface.php',
    'GuzzleHttp\\Stream\\NoSeekStream' => $vendorDir . '/guzzlehttp/streams/src/NoSeekStream.php',
    'GuzzleHttp\\Stream\\NullStream' => $vendorDir . '/guzzlehttp/streams/src/NullStream.php',
    'GuzzleHttp\\Stream\\PumpStream' => $vendorDir . '/guzzlehttp/streams/src/PumpStream.php',
    'GuzzleHttp\\Stream\\Stream' => $vendorDir . '/guzzlehttp/streams/src/Stream.php',
    'GuzzleHttp\\Stream\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/streams/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Stream\\StreamInterface' => $vendorDir . '/guzzlehttp/streams/src/StreamInterface.php',
    'GuzzleHttp\\Stream\\Utils' => $vendorDir . '/guzzlehttp/streams/src/Utils.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/DummyTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
    'React\\Promise\\CancellablePromiseInterface' => $vendorDir . '/react/promise/src/CancellablePromiseInterface.php',
    'React\\Promise\\CancellationQueue' => $vendorDir . '/react/promise/src/CancellationQueue.php',
    'React\\Promise\\Deferred' => $vendorDir . '/react/promise/src/Deferred.php',
    'React\\Promise\\Exception\\LengthException' => $vendorDir . '/react/promise/src/Exception/LengthException.php',
    'React\\Promise\\ExtendedPromiseInterface' => $vendorDir . '/react/promise/src/ExtendedPromiseInterface.php',
    'React\\Promise\\FulfilledPromise' => $vendorDir . '/react/promise/src/FulfilledPromise.php',
    'React\\Promise\\LazyPromise' => $vendorDir . '/react/promise/src/LazyPromise.php',
    'React\\Promise\\Promise' => $vendorDir . '/react/promise/src/Promise.php',
    'React\\Promise\\PromiseInterface' => $vendorDir . '/react/promise/src/PromiseInterface.php',
    'React\\Promise\\PromisorInterface' => $vendorDir . '/react/promise/src/PromisorInterface.php',
    'React\\Promise\\RejectedPromise' => $vendorDir . '/react/promise/src/RejectedPromise.php',
    'React\\Promise\\UnhandledRejectionException' => $vendorDir . '/react/promise/src/UnhandledRejectionException.php',
);
