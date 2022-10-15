
<div class="card">
        
        <div class="card-body">
        
            <div class="container mt-5">
            <h3>task list managar</h3>
        <hr class="border-border-2 border-dark">
                <div class="row">
            <div class="col-md-6">
                <h4 class="text-warning">breack fast</h4>
                
                    <?php 
                    foreach($show as $row){
                        echo "<h5>{$row['name']}</h5>";
                    }
                    ?>
                
                <h4 class="text-warning">Add task</h4>
                <form method="post">
                    <div class="form-group">
                <span>Task:</span>
                <input type="text" name="taskkkkk" class="form-control w-50 form-control-sm">
                    </div>
                    <div class="form-group mt-3">
                    <input type="submit" name="addta_btn" value="add task" class="btn btn-sm btn-secondary">
                    </div>
            <h4 class="text-warning mt-2">delete task</h4>
                    <div class="form-group">
                Task:<select class="form-select fom-select-sm w-50">
                    <option value="">-slect delete-</option>
                </select>
                    </div>
                    <div class="form-group mt-3">
                    <input type="submit" name="addtask_btn" value="delete task" class="btn btn-sm btn-secondary">
                    </div>
                    
            </div>




            <div class="col-md-6">
            <h4 class="text-warning">Add list selection</h4>
            <div class="form-group">
                 List:<select id="select-option" class="form-select w-50 form-select-sm" onchange="myfunction();">
                 echo <option value="">-select option-</option>
                    <?php 
                    foreach($show as $row){
                        echo "<option value='{$row['name']}'>{$row['name']}</option>";
                    }
                    ?>
                
                </select>
                </div>
                <div class="form-group mt-3">
                 <input type="submit" name="selecttask_btn" value="select task" class="btn btn-sm btn-secondary mb-3">
                </div>

                <h4 class="text-warning">Add Task list </h4>
            <div class="form-group">
                 List:<input type="text" id="add" name="addlist" class="form-control w-50 form-control-sm">
                </div>
                <div class="form-group mt-3">
                 <input type="submit" name="addlist_btn" value="Add List" class="btn btn-sm btn-secondary">
                </div>

            </div>
            
                </div>
                <div class="row">
                 <center>
                    <div class="form-group">
                    <input type="submit" value="clear all" name="clear_btn">
                    </div>
                    <?php 
                    if(!isset($_SESSION['msg'])){
                        
                        //header("refresh:2,./");
                        echo $_SESSION['msg'];
                    }else
                    {
                        echo "";
                    }
                    ?>
                    </center>
                </div>
                
            </div>
                </form>
            
        </div>
    </div>