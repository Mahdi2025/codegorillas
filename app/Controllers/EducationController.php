<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\EducationModel;
use App\Models\UserModel;
use App\Helpers\Helper;
use App\Libraries\MySql;


class educationController extends Controller
{

    public function index()
    {   
        
            $userId = Helper::getUserIdFromSession();
            $educations = EducationModel::load()->userEducations($userId);
            
            return View::render('educations/index.view', [
                'educations'    => $educations
            ]);
    }
        
    
    

    public function create()
    {   
        return View::render('educations/create.view', [
            'action' => '/education/store'
        ]);

    
    }

    
    /**
     * Store a user record into the database
     */
    public function store()
    {
        
        // dd($_POST);
        $education = $_POST;
        $education['created_by'] = Helper::getUserIdFromSession();
        $education['created'] = date('Y-m-d');
        $education['user_id'] = Helper::getUserIdFromSession();
        EducationModel::load()->store($education);


    }


    
    public function edit()
    {
        $educationId = Helper::getIdFromUrl('education');
        
        $education = EducationModel::load()->get($educationId);
        
        return View::render('educations/edit.view', [
            'action' => '/education/' . $educationId . '/update',
            'education' => $education
            
         
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
        
        $education = $_POST;
        
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}
