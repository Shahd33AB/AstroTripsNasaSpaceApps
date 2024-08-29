<?php
class client{
    private $id;
    private $name;
    private $age;
    private $email;
    private $password;
    private $gender;
    private $nationality;
    private $mobile_number;
    private $profile_photo;
    private $admin;
    
    public function getid(){
        return $this->id;
    }
    public function getname(){
        return $this->name;
    }
    public function getage(){
        return $this->age;
    }
    public function getemail(){
        return $this->email;
    }
    public function getpassword(){
        return $this->password;
    }
    public function getgender(){
        return $this->gender;
    }

    public function getnationality(){
        return $this->nationality;
    }
    public function getmobile_number(){
        return $this->mobile_number;
    }
    public function getprofile_photo(){
        return $this->profile_photo;
    }
    public function getadmin(){
        return $this->admin;
    }
    public function setid($id){
        $this->id=$id;
    }
    public function setname($name){
        $this->name=$name;
    }
    public function setage($age){
        $this->age=$age;
    }
    public function setemail($email){
        $this->email=$email;
    }
    public function setpassword($pw){
        $this->password=$pw;
    }
    public function setgender($gender){
        $this->gender=$gender;
    }

    public function setnationality($nat){
        $this->nationality=$nat;
    }
    public function setmobile_number($mob){
        $this->mobile_number=$mob;
    }
    public function setprofile_photo($photo){
        $this->profile_photo=$photo;
    }
    public function setadmin($admin){
        $this->admin=$admin;
    }
}

















?>