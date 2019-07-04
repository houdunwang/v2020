<?php

namespace Database;

use PDO;
use Exception;

class DB
{
    protected $link;
    protected $options = [
        'table' => '', 'field' => ' * ', 'order' => '', 'limit' => '', 'where' => ''
    ];
    public function __construct(array $config)
    {
        $this->connect($config);
    }
    protected function connect(array $config)
    {
        $dsn = sprintf(
            "mysql:host=%s;dbname=%s;charset=%s",
            $config['host'],
            $config['database'],
            $config['charset']
        );
        $this->link = new PDO($dsn, $config['user'], $config['password'], [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query(string $sql, array $vars = [])
    {
        $sth = $this->link->prepare($sql);
        $sth->execute($vars);
        return $sth->fetchAll();
    }
    public function execute(string $sql, array $vars = [])
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute($vars);
    }
    public function table(string $table)
    {
        $this->options['table'] = $table;
        return $this;
    }
    public function field(...$fields)
    {
        $this->options['field'] = '`' . implode('`,`', $fields) . '`';
        return $this;
    }
    public function limit(...$limit)
    {
        $this->options['limit'] = " LIMIT " . implode(',', $limit);
        return $this;
    }
    public function order(string $order)
    {
        $this->options['order'] = " ORDER BY " . $order;
        return $this;
    }
    public function where(string $where)
    {
        $this->options['where'] = " WHERE " . $where;
        return $this;
    }
    public function get()
    {
        // SELECT  * FROM NEWS WHERE   ORDER LIMIT
        $sql =  "SELECT {$this->options['field']} FROM {$this->options['table']} {$this->options['where']} {$this->options['order']} {$this->options['limit']}";
        return $this->query($sql);
    }
    public function insert(array $vars)
    {
        $fields = '`' . implode('`,`', array_keys($vars)) . '`';
        $values = implode(',', array_fill(0, count($vars), '?'));
        $sql  = "INSERT INTO {$this->options['table']} ($fields) VALUES($values)";
        return $this->execute($sql, array_values($vars));
    }
    public function update(array $vars)
    {
        if (empty($this->options['where'])) {
            throw new Exception('更新必须设置条件');
        }
        $sql = "UPDATE {$this->options['table']} SET " . implode('=?,', array_keys($vars)) . "=? {$this->options['where']}";
        return $this->execute($sql, array_values($vars));
    }
    public function delete()
    {
        if (empty($this->options['where'])) {
            throw new Exception('删除必须设置条件');
        }
        $sql = "DELETE FROM  {$this->options['table']} {$this->options['where']}";
        return $this->execute($sql);
    }
}
