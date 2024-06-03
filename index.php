<?php
// Include configuration file 
include_once 'config.php';

$postData = '';
if (!empty($_SESSION['postData'])) {
    $postData = $_SESSION['postData'];
    unset($_SESSION['postData']);
}

$status = $statusMsg = '';
if (!empty($_SESSION['status_response'])) {
    $status_response = $_SESSION['status_response'];
    $status = $status_response['status'];
    $statusMsg = $status_response['status_msg'];
}
?>

<!-- Status message -->
<?php if (!empty($statusMsg)) { ?>
    <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>


<!-- Disconnect user -->
<?php if ($_SESSION['google_access_token']) { ?>
    <a href='disconnect.php'>Disconnect</a>
<?php } ?>

<!-- list events -->
<a href="listEvents.php">LIST EVENTS</a>

<!-- Create Event -->
<div>
    <h5>Create Event</h5>
    <form method="post" action="addEvent.php">
        <div>
            <label>Event Title</label>
            <input type="text"  name="title" value="<?php echo !empty($postData['title']) ? $postData['title'] : ''; ?>" required="">
        </div>
        <div>
            <label>Event Description</label>
            <textarea name="description"><?php echo !empty($postData['description']) ? $postData['description'] : ''; ?></textarea>
        </div>
        <div>
            <label>Location</label>
            <input type="text" name="location"  value="<?php echo !empty($postData['location']) ? $postData['location'] : ''; ?>">
        </div>
        <div>
            <label>Date</label>
            <input type="date" name="date"  value="<?php echo !empty($postData['date']) ? $postData['date'] : ''; ?>" required="">
        </div>
        <div>
            <label>Time</label>
            <input type="time" name="time_from"  value="<?php echo !empty($postData['time_from']) ? $postData['time_from'] : ''; ?>">
            <span>TO</span>
            <input type="time" name="time_to"  value="<?php echo !empty($postData['time_to']) ? $postData['time_to'] : ''; ?>">
        </div>
        <div>
            <input type="submit" name="submit" value="Add Event" />
        </div>
    </form>
</div>

<!-- Delete Event -->
<div>
    <h5>Delete Event</h5>
    <form action="deleteEvent.php" class="form" method="post">
        <div>
            <label>Event id</label>
            <input type="text">
        </div>
        <div>
            <button type="submit"> Delete Event</button>
        </div>
    </form>
</div>