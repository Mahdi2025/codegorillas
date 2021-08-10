<section class="job_form">
        <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
            <div class="row">
                      <h2>Add a new job:</h2>
            <div class="col-12">
                <label for="start_year" class="form-label">start year?</label>
                <input type="number" class="form-control" id="start_year" name="start_year">
            </div>
            <div class="col-12">
                <label for="end_year" class="form-label">end_year?</label>
                <input type="number" class="form-control" id="end_year" name="end_year">
            </div>
            <div class="col-12">
                <label for="company_name" class="form-label">company_name:</label>
                <input type="text" class="form-control" id="company_name" name="company_name">
            </div>
            <div class="col-12">   
                    <label for="job" class="form-label">job:</label>
                    <input type="text" class="form-control" id="job" name="job">
                </div>
            
        </div>
        <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="edit" class="btn btn-primary">edit</button>
            <button type="save" class="btn btn-primary">save</button>
            <button type="update" class="btn btn-primary">update</button>
            <input type="hidden" name="f_token" value="<?= createToken() ?>">
        
        </form>
    </section>
    
