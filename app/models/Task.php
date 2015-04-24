<?php

class Task extends \Eloquent {
	protected $fillable = ['text'];
    protected $table    = 'tasks';

    public function createRecord($val)
    {
        $record = new Task();
        $record->text = $val;
        $record->save();

        if(!$record->save())
        {
            $err_msg = array('msg' => 'Unable to create new task!');
            return $err_msg;
        }
        else
        {
            $err_msg = array('msg' => 'OK!');
            return $err_msg;

        }
    }


}