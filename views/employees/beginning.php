<div class="card">
    <div class="card-header">
        <a href="?controller=employees&action=create" class="btn btn-success" role="button">Add employee</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($employees as $employee): ?>
                <tr>
                    <td><?=$employee->id ?></td>
                    <td><?=$employee->name ?></td>
                    <td><?=$employee->email ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="">
                            <a href="?controller=employees&action=edit&id=<?=$employee->id ?>" class="btn btn-info">Edit</a>
                            <a href="?controller=employees&action=delete&id=<?=$employee->id ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
