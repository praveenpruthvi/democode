<?php $slNo = 0;
if (!empty($usersList)) { ?>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Added On</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersList as $key => $user) { ?>
                    <tr>
                        <td><?= $slNo += 1; ?></td>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['created_ts']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <div class="well well-sm">
        <h4>No data Found</h4>
    </div>
<?php } ?>