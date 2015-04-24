<?php

class AjaxController extends \BaseController {

	/**
     *Ajax request functions
     */

    public function postData()
    {
        if(Request::ajax())
        {
            $input = Input::get('input');
            var_dump($input);


        }

    }

    public function getData()
    {

    }


}