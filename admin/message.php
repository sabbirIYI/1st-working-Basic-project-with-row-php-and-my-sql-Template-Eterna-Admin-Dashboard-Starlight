<?php
require_once 'inc/d_header.php';
require_once 'inc/db.php';
?>


    <div class="card">
        <div class="card-header">
            <h4 data-aos="fade-up">All Message List</h4>
            
            <?php
            $count_query = "SELECT COUNT(*) AS total_messages FROM messages";
            $total_messages = mysqli_query(connect_database(),$count_query);
            ?>
            <div class="badge btn-secondary"> Total Message : <?=mysqli_fetch_assoc( $total_messages)['total_messages']?></div>
            <?php
            $count_unread_query = "SELECT COUNT(*) AS total_unread_message FROM messages WHERE Status = 'unread'";
            $total_unread_messages = mysqli_query(connect_database(),$count_unread_query);
            ?>
            <div class="badge btn-danger"> Total Unread Message : <?=mysqli_fetch_assoc( $total_unread_messages)['total_unread_message']?></div>
            <?php
            $count_read_query = "SELECT COUNT(*) AS total_read_message FROM messages WHERE Status = 'read'";
            $total_read_messages = mysqli_query(connect_database(),$count_read_query);
            ?>
            <div class="badge btn-success"> Total Read Message : <?=mysqli_fetch_assoc( $total_read_messages)['total_read_message']?></div>
        </div>
        <div class="card-body">
            <form action="all_mark_delete.php" method="POST">
            <table class="table table-bordered table-inverse">
                <thead class="thead-inverse">
                    <tr>
                        <th>Check</th>
                        <th>No:</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                    foreach (database('messages') as $serial_number => $message) {

                    ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="check[<?= $message['id']?>]" class="d-block">
                            </td>
                            <td><?php echo $serial_number+1; ?></td>
                            <td><?php echo $message['name']; ?></td>
                            <td><?php echo $message['email']; ?></td>
                            <td><?php echo $message['subject']; ?></td>
                            <td><?php echo $message['Status']; ?></td>
                            <td><a href="message-details.php?id=<?= $message['id']; ?>" class="btn btn-info btn-sm">Read</a>
                            <a href="message-delete.php?id=<?= $message['id']; ?>" class="btn btn-info btn-sm">Delete</a> </td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>  
        <button type="submit" class="btn btn-danger">All Mark Delete</button>
        </form>
        </div>
    </div>

<?php
require_once 'inc/d_footer.php';
?>
 <?php
    if (isset( $_SESSION ['message_delete'] )) {

    ?>
          <script>
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                })
      
                Toast.fire({
                  icon: 'success',
                  title: '<?=  $_SESSION ['message_delete']?>'
                })
            </script> 
              
        <?php
        }
        ?>

<?php
    session_unset();
?>
