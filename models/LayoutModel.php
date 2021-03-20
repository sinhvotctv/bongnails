<?php
  class LayoutModel extends Database{
    public function getMenuiData(){
      return $this->select("site_menui","*");
    }
    public function getMenuiiData(){
      return $this->select("site_menuii","*");
    }
    public function getIntroduceData(){
      return $this->select("site_site","*");
    }
    public function getServicesData(){
      return $this->select("site_sevice","*");
    }
    public function getMembershipData(){
      return $this->select("site_nhanvien","*");
    }
    public function getVideoIntroduceData(){
      return $this->select("site_video","*");
    }
    public function getBlogData(){
      return $this->select("site_post","*");
    }
    public function getCustomerData(){
      return $this->select("site_customer","*");
    }
    public function getSlideData(){
      return $this->select("site_slide","*");
    }
    public function getGalleryData(){
      return $this->select("site_gallery","*");
    }
  }
?>