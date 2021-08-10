<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\UserModel;
use App\Helpers\Helper;
use App\Models\JobsModel;
use App\Libraries\MySql;

class JobsController extends Controller
{

    public function index()
    {
            
            $userId = Helper::getUserIdFromSession();
            $jobs   = jobsModel::load()->userJobs($userId);
            
            return View::render('jobs/index.view', [
                'jobs' => $jobs
            ]);
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
         
        $jobs = $_POST;
        $jobs['created_by'] = Helper::getUserIdFromSession();
        $jobs['created'] = date('Y-m-d');
        $jobs['user_id'] = Helper::getUserIdFromSession();
        JobsModel::load()->store($jobs);
        

    }
    
    public function create()
    {
        return View::render('jobs/create.view', [
            'action' => '/job/store',
            'method'=> "POST",
        ]);
    }

    public function show()
    {
    }

    public function edit()
    {
            $jobId = Helper::getIdFromUrl('jobs');
            
            $jobs = jobsModel::load()->get($jobId);

            return View::render('jobs/edit.view', [
                'action' => '/job/' . $jobId . '/update',
                'job' => $jobs

            ]);

    }
    /**
     * Updates a user record into the database
     */
    public function update()
    {
        $jobs = $_POST;
    }

    /**
     * Archive a user record into the database
     */
    public function destroy()
    {
    }
}