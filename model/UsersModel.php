<?php

class UsersModel
{
    public function all()
    {
        $query = Database::connection()->query('SELECT * FROM users');
        return $query;
    }

    public function add($name, $lastname)
    {
        $query = Database::connection()->query('INSERT INTO users(uid, name, lastname) VALUES(null, "' . $name . '", "' . $lastname . '")');
        return $query;
    }

    public function find($uid)
    {
        $query = Database::connection()->query('SELECT * FROM users WHERE uid = ' . $uid);
        return $query;
    }

    public function save($uid, $name, $lastname)
    {
        $query = Database::connection()->query('UPDATE users SET name = "' . $name . '", lastname = "' . $lastname . '" WHERE uid = ' . $uid);
        return $query;
    }

    public function remove($uid)
    {
        $query = Database::connection()->query('DELETE FROM users WHERE uid = ' . $uid);
        return $query;
    }
}
