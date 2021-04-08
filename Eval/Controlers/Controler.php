<?php
namespace Controler;


class Controler{
    public function getImg()
        {
            $img = scandir('../images/'); 
            if (in_array( $this->pro_id . '.' . $this->pro_photo, $img)){
                return '../images/' . $this->pro_id . '.' . $this->pro_photo;;
                    }else return '../images/autre.jpg';
        }
}

