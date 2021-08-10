<section class="skill_form">
        <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
            <div class="row">
                      <h2>Add a new skill:</h2>
                <div class="col-12">
                    <label for="skill" class="form-label">skill:</label>
                    <input type="text" class="form-control" id="skill" name="skill" > 
                </div>
                <div class="col-12">
                    <label for="skill_value" class="form-label">skill_value:</label>
                    <input type="number"  class="form-control" id="skill_value" name="skill_value" >
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
    












   