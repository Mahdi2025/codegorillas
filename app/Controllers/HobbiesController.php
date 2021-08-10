<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\UserModel;
use App\Helpers\Helper;
use App\Models\HobbiesModel;
use App\Libraries\MySql;


class HobbiesController extends Controller
{

    public function index()
    {
            $userId = Helper::getUserIdFromSession();
            $hobbies = HobbiesModel::load()->userHobbies($userId);
        
            return View::render('hobbies/index.view', [
                'hobbies'      => $hobbies
              
            ]);

    }
 

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
        $hobbies = $_POST;
        $hobbies['created_by'] = Helper::getUserIdFromSession();
        $hobbies['created'] = date('Y-m-d');
        $hobbies['user_id'] = Helper::getUserIdFromSession();
        hobbiesModel::load()->store($hobbies);
    
    }

    public function create()
    {
        return View::render('hobbies/create.view', [
            'action' => '/hobbie/store'
        ]);

    }

    public function show()
    {   
        
        
    }

    /**
     * Updates a user record into the database
     */
    public function edit()
    {
            $hobbiesId = Helper::getUserIdFromSession('hobbie');
            
            $hobbies  = HobbiesModel::load()->get($hobbiesId);
            
            return View::render('hobbies/edit.view', [
                'action' => '/hobbie/' . $hobbiesId . '/update',
                'hobbie' => $hobbies
        ]);   
    }

    /**
     * Archive a user record into the database
     */
    public function destroy()
    {
    }
}