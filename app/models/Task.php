<?php

class Task extends \Eloquent {
	protected $fillable = ['text'];
    protected $table    = 'tasks';

    public function createRecord($val)
    {
        $record = new Task();
        $record->text = $val;
        $record->save();

    }


}