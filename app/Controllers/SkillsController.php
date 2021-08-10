<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\UserModel;
use App\Helpers\Helper;
use App\Libraries\MySql;
use App\Models\SkillsModel;


class SkillsController extends Controller
{

    public function index()
    {
            $userId = Helper::getUserIdFromSession();
            $skills = skillsModel::load()->userSkills($userId);
            
            return View::render('skills/index.view', [
                'skills'    => $skills
            ]);

    }
    /**
     * Store a user record into the database
     */
    public function store()
    {   
        $skills = $_POST;
        $skills['created_by'] = Helper::getUserIdFromSession();
        $skills['created'] = date('Y-m-d');
        $skills['user_id'] = Helper::getUserIdFromSession();
        SkillsModel::load()->store($skills);

    }

    public function edit()
    {
        $skillId = Helper::getIdFromUrl('skills');
        
        $skills = SkillsModel::load()->get($skillId);

        return View::render('skills/edit.view', [
            'action' => '/skill/' . $skillId . '/update',
            'skill' => $skills

        ]);

    }

    public function create()
    {
         
        return View::render('skills/create.view', [
            'action' => '/skill/store',
             'method'=> "POST",
        ]);

        
    }

    public function show()
    {
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        $skills = $_POST;
    }

    /**
     * Archive a user record into the database
     */
    public function destroy()
    {
    }
}