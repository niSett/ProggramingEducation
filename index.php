<?php 
require 'users/users.php';

$users = getUsers();

include 'partDesign/header.php'; ?>

<div class="container">
    <p>
        <a> class="btn btn-outline-success" href="create.php">Create new User</a>
    </p>

    <table>
        <thead>
        <tr>
            <th> Image </th>
            <th> Name </th>
            <th> Username </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Website </th>
            <th> Action </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
        <tr> 
            <td>
                <?php if (isset($user['extension'])): ?>
                    <img style="width: 60px" src="<?php echo "$user/images/$(user['id']).$(user['extension'])" ?>" alt="">
                <?php endif; ?>
            </td>
            <td> <?php echo $user['name'] ?> </td>
            <td> <?php echo $user['esername'] ?> </td>
            <td> <?php echo $user['email'] ?> </td>
            <td> <?php echo $user['phone'] ?> </td>
            <td> 
                <a target="_blank" href="http://<?php echo $user['website'] ?>">
                    <?php echo $user['website'] ?>
                </a>
            </td>
            <td>
                <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View </a>
                <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-second">Update</a>
                <form action="delete.php">
                    <input type="hiddeb" name="id" value="<?php echo $user['id'] ?>">
                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
                </td>
        </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partDesign/footer.php'; ?>

<!-- <div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Create new User</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
        </thead> -->