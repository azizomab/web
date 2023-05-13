<?php
class user
{
    private ?int $iduser = null;
    private ?string $username = null;
    private ?string $pwd = null;
    private ?string $adress = null;
    private ?DateTime $dob = null;

    public function __construct($id = null, $n, $p, $a, $d)
    {
        $this->username = $n;
        $this->pwd = $p;
        $this->adress = $a;
        $this->dob = $d;
    }  

    /**
     * Get the value of iduser
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Get the value of username
     */
    public function getusername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setusername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of pwd
     */
    public function getpwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @return  self
     */
    public function setpwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get the value of adress
     */
    public function getadress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */
    public function setadress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }
}
