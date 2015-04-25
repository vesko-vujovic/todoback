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

    public function deleteData()
    {
        if (Request::ajax())
        {

        }

    }


}