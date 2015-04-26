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
           $id           =  Input::get('id');
           $deleteTask   = Task::destroy($id);
           return Response::json(Task::all());

        }
    }


}