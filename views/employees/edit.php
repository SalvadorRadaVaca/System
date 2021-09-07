<div class="card">
    <div class="card-header">
        Add Employee
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
              <label for="id" class="form-label">ID:</label>
              <input readonly type="text" value="<?=$employee->id?>" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Employee id">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input required type="text" value="<?=$employee->name?>" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Employee name">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input required type="email" value="<?=$employee->email?>" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Employee email">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Update Employee">

            <a href="?controller=employees&action=beginning" class="btn btn-primary">Cancel</a>
        </form>
    </div>
</div>