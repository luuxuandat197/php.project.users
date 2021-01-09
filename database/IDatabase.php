<?php


interface IDatabase
{
    public function connect();

    /** Retrieving All Records */
    public function all();

    /** Retrieving A Record By Primary Key     */
    public function find($id);

    /** Retrieving A Model By Primary Key Or Throw An Exception */
    public function findOrFail($id);

    public function where($column, $operator, $value);

    public function take();

    public function get();

    public function whereRaw(string $compare);

    public function count();

    public function chunk();

    public function on();

    public function onWriteConnection();

    public function create();
    public function firstOrCreate();
    public function firstOrNew();
    public function save();
    public function push();
    public function delete();
}