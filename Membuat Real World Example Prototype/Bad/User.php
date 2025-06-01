<?php

class UserProfile
{
    private $name;
    private $email;
    private $address;

    public function __construct($name, $email, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    // Metode untuk mengupdate profil pengguna
    public function updateProfile($name, $email, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
}

class User
{
    private $username;
    private $password;
    private $profile;

    public function __construct($username, $password, $profile)
    {
        $this->username = $username;
        $this->password = $password;
        $this->profile = $profile; // User memiliki objek UserProfile, tapi hubungannya tidak terstruktur
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    // Metode untuk mengupdate profil pengguna
    public function updateProfile($name, $email, $address)
    {
        // Memperbarui profil pengguna, tetapi tidak ada validasi atau manajemen kesalahan yang baik
        $this->profile->updateProfile($name, $email, $address);
    }
}

// Client code
$userProfile = new UserProfile("John Doe", "john@example.com", "123 Main St");
$user = new User("johndoe", "password123", $userProfile);

// Update profile
$user->updateProfile("Jane Smith", "jane@example.com", "456 Elm St");

// Output
echo "Username: " . $user->getUsername() . "\n";
echo "Email: " . $user->getProfile()->getEmail() . "\n";
echo "Address: " . $user->getProfile()->getAddress() . "\n";
