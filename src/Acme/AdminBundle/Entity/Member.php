<?php 
namespace Acme\AdminBundle\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="members")
 * @ORM\Entity(repositoryClass="Acme\AdminBundle\Repository\MemberRepository")
 */

class Member{
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	* @ORM\Column(type="string", length=200)
	*/
	private $username;

	/**
	* @ORM\Column(type="string",length=100)
	*/
	private $password;

    /**
    * @ORM\Column(type="string", length=255)
    */
    private $email;

    /**
    * @ORM\Column(type="decimal")
    */
    private $money;

    /**
    * @ORM\Column(type="decimal")
    */
    private $frozen_money;

    /**
    * @ORM\Column(type="integer")
    */
    private $point;

    /**
    * @ORM\Column(type="integer")
    */
    private $address_id;

    /**
    * @ORM\Column(type="integer")
    */
    private $regtime;

    /**
    * @ORM\Column(type="integer")
    */
    private $lastlogin;

    /**
    * @ORM\Column(type="smallint")
    */
    private $status;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Member
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Member
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Member
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set money
     *
     * @param string $money
     * @return Member
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string 
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set frozen_money
     *
     * @param string $frozenMoney
     * @return Member
     */
    public function setFrozenMoney($frozenMoney)
    {
        $this->frozen_money = $frozenMoney;

        return $this;
    }

    /**
     * Get frozen_money
     *
     * @return string 
     */
    public function getFrozenMoney()
    {
        return $this->frozen_money;
    }

    /**
     * Set point
     *
     * @param integer $point
     * @return Member
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return integer 
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set address_id
     *
     * @param integer $addressId
     * @return Member
     */
    public function setAddressId($addressId)
    {
        $this->address_id = $addressId;

        return $this;
    }

    /**
     * Get address_id
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->address_id;
    }

    /**
     * Set regtime
     *
     * @param integer $regtime
     * @return Member
     */
    public function setRegtime($regtime)
    {
        $this->regtime = $regtime;

        return $this;
    }

    /**
     * Get regtime
     *
     * @return integer 
     */
    public function getRegtime()
    {
        return $this->regtime;
    }

    /**
     * Set lastlogin
     *
     * @param integer $lastlogin
     * @return Member
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    /**
     * Get lastlogin
     *
     * @return integer 
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Member
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
