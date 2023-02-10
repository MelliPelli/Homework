<?php

Class Password{
    private $password;

    public function __construct($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function generate($length, $difficulty){
        $chars = "";
        if ($difficulty == "easy") {
            $chars = implode(range('a', 'z'));
        } elseif ($difficulty == "medium") {
            $chars = implode(array_merge(range('a', 'z'), range('A', 'Z')));
        } elseif ($difficulty == "hard") {
            $chars = implode(array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), ['!', '@', '#', '$', '%', '^', '&', '*']));
        }
        $this->password = substr(str_shuffle($chars), 0, $length);
    }

    public function check($password2){
        return $this->password == $password2;
    }
}

class PasswordTest{
    public function test(){
        $password1 = new Password("mypassword");
        $password1->generate(8, "medium");
        echo "Generated password1: " . $password1->getPassword() . "\n";

        $password2 = new Password("mypassword");
        $password2->generate(8, "medium");
        echo "Generated password2: " . $password2->getPassword() . "\n";

        echo "Check result: " . ($password1->check($password2->getPassword()) ? "passwords match" : "passwords don't match") . "\n";
    }
}

$test = new PasswordTest();
$test->test();
?>