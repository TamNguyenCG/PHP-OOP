<?php
class User {
    public mixed $name;
    public mixed $age;
    public mixed $address;
    public mixed $phone;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->age = $data['age'];
        $this->address = $data['address'];
        $this->phone = $data['phone'];
    }

    /**
     * @return mixed
     */
    public function getAddress(): mixed
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getAge(): mixed
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPhone(): mixed
    {
        return $this->phone;
    }


    /**
     * @param mixed $address
     */
    public function setAddress(mixed $address): void
    {
        $this->address = $address;
    }

}