<?php
if(isset($_SESSION['status'])) {
    ?>
    <script>
        function showAlertMessage(message) {
            alert(message);
        }

        showAlertMessage("<?php echo $_SESSION['status']; ?>");
    </script>
    <?php
    unset($_SESSION['status']);
}
?>
