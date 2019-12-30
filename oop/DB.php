<?php

class DB
{
    const HOST = "127.0.0.1";
    public static $prefix = "";
    public $table;

    public function all()
    {
        return "select * from {$this->table}";
    }

    public function find($id, $columns = null)
    {
        $columns = !is_nan($columns) ? implode(',', $columns) : "*";
        return "select {$columns} from {$this->table} where id={$id}";
    }

    public function delete($id)
    {
        return "delete from {$this->table} where id={$id}";
    }

    public static function export()
    {
        echo self::HOST;
        echo self::$prefix;

        echo static ::HOST;
        echo static::$prefix;
    }
}


DB::export();
