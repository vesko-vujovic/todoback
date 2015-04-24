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
            $taskObj   = $taskObj->createRecord($input);
            if($taskObj['msg'] == 'OK')
            {
                $allTasks = Task::all();
                return Response::json($allTasks);
            }
            else
            {
                return Response::json($taskObj);
            }

        }

    }

    public function getData()
    {

    }


}