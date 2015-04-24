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
            $returned  = Task::createRecord($input);

            return Response::json($returned);

        }

    }

    public function getData()
    {

    }


}