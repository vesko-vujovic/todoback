<?php
class AjaxController extends \BaseController {

	/**
     *Ajax request functions
     */
    public function postData()
    {
        if(Request::ajax())
        {
            $input     = Input::get('input');
            $taskObj   = new Task();
            $taskObj->createRecord($input);
            $allRecord = Task::all();

            return Response::json($allRecord);
        }
    }

    public function getData()
    {
        if(Request::ajax())
        {
            $allRecord = Task::all();
            return Response::json($allRecord);
        }

    }

    public function deleteAllCheckedData()
    {
        if (Request::ajax())
        {

        }
    }

    public function deleteTask()
    {
        if(Request::ajax())
        {
           $id            =  Input::get('id');
           $task          =  Task::find($id);
           $task->delete();

           return Response::json(Task::all());
        }
    }

    public function  deleteTaskGroup()
    {

    }



}