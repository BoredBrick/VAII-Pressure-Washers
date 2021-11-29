<?php

class Email {
    public function __construct(
        public ?string $name = null,
        public ?string $subject = null,
        public ?string $email = null,
        public ?string $message = null

    ) {
    }

    public function sendMail() {
        $headers = "Mail from: " . $this->email;
        $message = "You have mail from " .$this->name.".\n\n".$this->message;
        $myMail = "umnxpaaqgkmfbjdtsh@sdvgeft.com";
        if(mail($myMail,$this->subject, $message)) {
            $a = 5;
        }
        else {
            $g = 3;
        }
        header("Location: contact.php?mailsend");
    }

}