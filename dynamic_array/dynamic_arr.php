<?php
class Dynamic_array
{
    public $data = array();
    public $size;

    // this is cunstructor
    public function Dynamic_array()
    {
        $this->size = 0;
        //تحديد حجم المصفوفه الي 1
        $this->data = array_fill(0, 1, null);
    }

    //فحص طول المصفوفه ان كانت تحتمل اي عنصر او اي منتج اضافه
    private function check_the_size_of_array($check_size)
    {
        $current_size = sizeof($this->data);
        if ($current_size < $check_size) {
            $new_size = $current_size * 2;
            $this->data = array_pad($this->data, $new_size, null);
            if ($current_size < $check_size) {
                $new_size = $check_size;
                $this->data = array_pad($this->data, $new_size, null);
            }
        }
    }

    //اضافه عنصر جديد للاراي 
    public function add_item($new_item)
    {
        $this->check_the_size_of_array($this->size++);
        $this->data[$this->size] = $new_item;
    }

    //حزف اي عنصر من الارراي
    public function delete($item)
    {
        $new_arr = array();
        $orginal_array = $this->data;
        foreach ($orginal_array as $key => $data) {
            # code...
            // $found = false;
            if ($data != $item) {
                // $found = true;
                $new_arr[] = $data;
            }

            // if ($found) {
            $this->data = $new_arr;
            // }
        }
    }

    //select * data from array
    public function get_data()
    {
        return $this->data;
    }

    //تفريغ المصفوفه من كافه البيانات
    public function delete_all_data()
    {
        $this->data = [];
        $this->size = 0;
    }
}

?>