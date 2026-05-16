<?php
include_once("model/mSanpham.php");
include_once("cUpload.php");
    class cSanpham{
        public function cThemSP($tensp,$giagoc,$giaban,$hinhanh,$th){
            $p = new cUpload();
            $anh = $p->cUploadanh($hinhanh);
            if(!$anh){
                return false;
            }
            $p = new mSanpham();
            return $p->mThemSP($tensp,$giagoc,$giaban,$anh,$th);
            
        }
        public function cGetSP(){
            $p = new mSanpham();
            return $p->mGetSP();
        }
        public function cUpdateSP($idsp,$tensp,$giagoc,$giaban,$fileImage,$oldImage,$th){
            $anh = $oldImage;
            if(!empty($fileImage['name'])){
                $p = new cUpload();
                $anh = $p->cUploadanh($fileImage);
                if(!$anh){
                    return false;
                }
            }
            $p = new mSanpham();
            return $p->mUpdateSP($idsp,$tensp,$giagoc,$giaban,$anh,$th);
        }
        public function cGetSPbyID($id){
            $p = new mSanpham();
            return $p->mGetSPbyID($id);
        }
        
        public function cXoaSP($id){
        $p = new mSanpham();
        return $p->mXoaSP($id);
        
    
        }
        
    }
?>