<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<div class="card">
    <?php

    $c_date=$data[0]['account_created'];
    $modify_c_date=date('d/m/y',strtotime($c_date));
    $modify_c_ll=date('d/m/y  h:i:s',strtotime($c_date));

    ?>
    <div class="card-body">
        <div class="card-header"><strong>User Data</strong></div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Account created</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $data[0]['f_name']." ".$data[0]['l_name']; ?></td>
                <td><?php echo $data[0]['email']; ?></td>
                <td><?php echo $data[0]['number']; ?></td>
                <td><?php echo $modify_c_date; ?></td>
                <td><?php echo $modify_c_ll; ?></td>
            </tr>
        </tbody>
    </table>
</div>
</div>