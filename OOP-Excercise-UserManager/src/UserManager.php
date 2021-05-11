<?php


class UserManager
{
    protected mixed $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function getDataToFile() {
        //lay du lieu trong data.json
        $dataJson = file_get_contents($this->filePath);
        //trả về giá trị data.json -> dưới dạng mảng liên kết = true
        return json_decode($dataJson, true);
    }

    function saveDataToFile($newData) {
        // chuyen array -> json
        $dataJson = json_encode($newData);
        // ghi de noi dung file
        file_put_contents($this->filePath, $dataJson);
    }

    function getAll(): array
    {
        $data = $this->getDataToFile();
        $users = [];
        foreach ($data as $item) {
            $user = new User($item);
            $users[] = $user;
        }
        return $users;
    }

    function deleteUser($index) {
        $data = $this->getDataToFile();
        array_splice($data, $index, 1);
        $this->saveDataToFile($data);
    }

    function addUser($item) {
        $data = $this->getDataToFile();
        array_push($data, $item);
        $this->saveDataToFile($data);
    }

    function editUser($object,$index){
        $data = $this->getDataToFile();
        $data[$index] = $object;
        $this->saveDataToFile($data);
    }
}