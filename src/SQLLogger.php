<?php

/**
 * @see \Doctrine\DBAL\Logging\EchoSQLLogger
 */
class SQLLogger implements \Doctrine\DBAL\Logging\SQLLogger
{

    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, array $params = null, array $types = null)
    {
        echo "\033[33m$sql\033[0m";

        if ($params) {
            echo " \033[36m" . \json_encode($params) . "\033[0m";
        }

        echo PHP_EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
    }
}
