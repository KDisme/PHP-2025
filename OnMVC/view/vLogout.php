<?php
    session_destroy();
    echo"<script>alert('Ban co chac chan dang xuat')</script>";
    header("refresh:1; url=index.php")
?>