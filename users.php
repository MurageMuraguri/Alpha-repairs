<?php

require_once 'vendor/autoload.php';

use Kreait\Firebase\Exception\AuthException;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class users
{
    protected $auth;
    protected $createdUser;


    public function register(array $userProperties)
    {
        $auth = (new Factory)
            ->withServiceAccount(__DIR__ . '/sauce/ultra-4704e-firebase-adminsdk-6x0l9-4f453f2e59.json')
            ->createAuth();

        try {
            if ($auth->createUser($userProperties) == TRUE) {
                return true;
            } else {
                return false;
            }
        } catch (AuthException $e) {
            print $e;
            return false;

        } catch (FirebaseException $e) {
            print $e;
            return false;

        }
        return false;

    }


public function authenticate(string $email,string $password){
    $auth = (new Factory)
        ->withServiceAccount(__DIR__ . '/sauce/ultra-4704e-firebase-adminsdk-6x0l9-4f453f2e59.json')
        ->createAuth();


    try {
        $user = $auth->verifyPassword($email, $password);
        return true;
    } catch (Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
        echo $e->getMessage();

        return false;
    } catch (AuthException $e) {
        return false;
    } catch (FirebaseException $e) {
        return false;
    }

    return false;
}
 public function userInfo(string $Email){
     $auth = (new Factory)
         ->withServiceAccount(__DIR__ . '/sauce/ultra-4704e-firebase-adminsdk-6x0l9-4f453f2e59.json')
         ->createAuth();
     $user = $auth->getUserByEmail($Email);

     return $user;
 }
}

//$user = $auth->getUser('some-uid');
//
//$ins = new users();
//////
//$ins->userInfo();
//////
//$ins->register([
//    'email' => 'fuckoff@example.com',
//    'emailVerified' => false,
//    'password' => 'secretPassword',
//    'displayName' => 'John Doe',
//    'photoUrl' => 'http://www.example.com/12345678/photo.png',
//    'disabled' => false,
//]);
//
