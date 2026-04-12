<?php
    class cUpload{
        public function cUploadanh($file){
            if($file["size"]>2*1024*1024) return -3;

            $a=array("image/png","image/jpeg");
            if(!in_array($file["type"],$a)) return -2;
            
            $newName = $this->rename($file["name"]);
            return move_uploaded_file($file["tmp_name"], $newName) ? $newName : -1;
        }
        private function rename($name){
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $filename = pathinfo($name, PATHINFO_FILENAME);

            return "image/" . $filename . "_" . rand(100,999) . "." . $ext;
        }
    }
?>