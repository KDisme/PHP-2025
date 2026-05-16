<?php
    class cUpload{
        public function cUploadanh($file){
            $thumuc = "image/" . $file['name'];

            if (!move_uploaded_file($file['tmp_name'], $thumuc)) {
                return false;
             }
                return $file['name']; 
        }
    }
?>