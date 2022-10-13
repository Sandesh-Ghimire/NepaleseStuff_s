<?php

    include "../functions/connect.php";

    if (isset($_SESSION["admin_email"])) {

        $query = "SELECT * FROM `featuredtable` WHERE `blogId0` = 0";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (isset($_POST["submit"])) {
            if (isset($_POST['fb_1']) && isset($_POST['fb_2']) && isset($_POST['fb_3'])  && isset($_POST['fb_4']) && isset($_POST['fb_5'])
            && isset($_POST['fb_6']) && isset($_POST['fb_7']) && isset($_POST['fb_8']) && isset($_POST['fb_9'])) {
                $fb1 = $_POST['fb_1'];
                $fb2 = $_POST['fb_2'];
                $fb3 = $_POST['fb_3'];
                $fb4 = $_POST['fb_4'];
                $fb5 = $_POST['fb_5'];
                $fb6 = $_POST['fb_6'];
                $fb7 = $_POST['fb_7'];
                $fb8 = $_POST['fb_8'];
                $fb9 = $_POST['fb_9'];
                
                $query = "UPDATE `featuredtable` SET `blogId1` = $fb1, `blogId2` = $fb2, `blogId3` = $fb3, `blogId4` = $fb4, `blogId5` = $fb5, `blogId6` = $fb6, `blogId7` = $fb7, `blogId8` = $fb8, `blogId9` = $fb9 WHERE `blogId0` = 0";
                $stmt = $pdo->prepare($query);
                if ($stmt->execute()) {
                    echo "<script>alert('Success: Featured Blog List Updated Successfully')</script>";
                } else {
                    echo "<script>alert('Error: Something went wrong...')</script>";
                }
            } else {
                echo "<script>alert('Error: All the fields need to have value')</script>";
            }
        }
    }

?>

<!-- CSS -->
<style>
    .fbdiv {
        margin: 21px 8px;
        width: 300px;
    }
    .sameLine {
        display: flex;
        justify-content: space-between;
    }
    button[type=submit] {
        width: 144px;
        border-radius: 8px;
        margin-left: 8px;
    }
    form {
        padding-left: 144px;
        padding-right: 144px;
        background-color: transparent;
        height: 89vh;
        margin-top: 55px;
    }
    .toRight {
        margin-top: 55px;
        float: right;
    }
</style>

<form method="POST">
    <div class="sameLine">
        <!-- Big Featured Blog -->
        <div class="fbdiv">
            <label for="blog1" class="form-label">Featured Blog: 1</label>
            <input type="number" class="form-control" id="blog1" name="fb_1" placeholder="<?= $row['blogId1'] ?>" required>
        </div>
        <div class="fbdiv">
            <label for="blog2" class="form-label">Featured Blog: 2</label>
            <input type="number" class="form-control" id="blog2" name="fb_2" placeholder="<?= $row['blogId2'] ?>" required>
        </div>
        <div class="fbdiv">
            <label for="blog3" class="form-label">Featured Blog: 3</label>
            <input type="number" class="form-control" id="blog3" name="fb_3" placeholder="<?= $row['blogId3'] ?>" required>
        </div>
    </div>

    <div class="sameLine">
        <!-- Small Featured Blog -->
        <div class="fbdiv">
            <label for="blog4" class="form-label">Featured Blog: 4</label>
            <input type="number" class="form-control" id="blog4" name="fb_4" placeholder="<?= $row['blogId4'] ?>" required>
        </div>
        <div class="fbdiv">
            <label for="blog5" class="form-label">Featured Blog: 5</label>
            <input type="number" class="form-control" id="blog5" name="fb_5" placeholder="<?= $row['blogId5'] ?>" required>
        </div>
        <div class="fbdiv">
            <label for="blog6" class="form-label">Featured Blog: 6</label>
            <input type="number" class="form-control" id="blog6" name="fb_6" placeholder="<?= $row['blogId6'] ?>" required>
        </div>
    </div>
    <div class="sameLine">
        <!-- Small Featured Blog -->
        <div class="fbdiv">
            <label for="blog7" class="form-label">Featured Blog: 7</label>
            <input type="number" class="form-control" id="blog7" name="fb_7" placeholder="<?= $row['blogId7'] ?>" required>
        </div>
        <div class="fbdiv">
            <label for="blog8" class="form-label">Featured Blog: 8</label>
            <input type="number" class="form-control" id="blog8" name="fb_8" placeholder="<?= $row['blogId8'] ?>" required>
        </div>
        <div class="fbdiv">
            <label for="blog9" class="form-label">Featured Blog: 9</label>
            <input type="number" class="form-control" id="blog9" name="fb_9" placeholder="<?= $row['blogId9'] ?>" required>
        </div>
    </div>
    <div class="sameLine toRight">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>

<script>
    document.getElementById('blog1').innerText = $row['blog1'];
</script>