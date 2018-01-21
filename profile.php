<?php
/**
 * Created by PhpStorm.
 * User: Jeffrey
 * Date: 1/21/2018
 * Time: 3:13 PM
 */

namespace Edu\Cnm\accessorsmutators;
/**
 * Typical profile for an ecommerce site
 *
 * This profile is an abbreviated example of data collected and stored about a user for ecommerce.
 * This can be extended to include more information such as address, phone number, etc.
 *
 * @author Jeffrey Brink <jeffreybrink@gmx.com>
 **/
class profile {
    /**
     * id for this profile;  This is the primary key
     **/
    private $profileId;
     /**
      * id for the user who owns this profile;  this is a foriegn key
      **/
    private $userId;
      /**
       * first name of this person
       **/
    private $firstName;
       /**
        * last name of this person
        **/
    private $lastName;

        /**
         * accessor method for profile id
         *
         * @return int value of profile id
         **/
    public function getProfileId() {
        return($this->profileId);
    }

     /**
        * mutator method for profile id
        *
        * @param int $newProfileId new value of profile id
        * @throws UnexpectedValueException if $newProfileId is not an integer
     **/
     public function setProfileId($newProfileId) {
         $newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
         if($newProfileId === false) {
             throw (new UnexpectedValueException("profile id is not a valid integer"));
         }

         // convert and store the profile id
         $this->profileId = intval(newProfileId);
     }
     /**
      * accessor method for first name
      *
      * @param string $newFirstName new value of first name
      * @throws UnexpectedValueException if $newFirstName is not valid
      **/
    public function setFirstName($newFirstName) {
        // verify the first name is valid
        $newFirstName = filter_var($newFirstName, FILTER_VAR_STRING);
        if($newFirstName === false) {
            throw(new UnexpectedValueException("first name is not a valid string"));
        }

        // store the first name
        $this->firstName = $newFirstName;
    }

    /**
     * accessor method for last name
     *
     * @return string value of last name
     **/
   public function getLastName() {
       return($this->lastName);
   }

   /**
    * mutator method for last name
    *
    * @param string $newLastName new value of last name
    * @throws UnexpectedValueExeption if $newLastName is not valid
    **/
    public function setLastName ($newLastName) {
        //verify the last name is valid
        $newLastName = filter_var($newLastName, FILTER_SANITIZE_STRING);
        if($newLastName === false) {
            throw(new UnexpectedValueException("last name is not a valid string"));
        }

    //store the last name
    $this->lastname = $newLastName;
    }
}


