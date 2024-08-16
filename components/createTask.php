<?php
if (isset($_POST['task_submit'])) {
  echo 'Có data nè </br>';
  echo $_POST['title'];
  header('Location: ../index.php');
}
?>

<form method="POST" action="./components/createTask.php">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title ..." name="title" aria-describedby="emailHelp">

  </div>
  <div class=" mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" placeholder="Leave a content here" id="content" name="content" style="height: 100px"></textarea>

  </div>
  <button type="submit" name='task_submit' class="btn btn-primary">Submit</button>
</form>