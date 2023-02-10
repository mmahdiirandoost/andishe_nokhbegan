<? 
$email_address1 = "mm.irandoost@yahoo.com";
$email_address2 = "info@andishenokhbegan.ir";
$email_address3 = "mm.irandoost@yahoo.com"; 
$email_address4 = "mm.irandoost@yahoo.com"; 
$email_name = $name_sherkat; 
$next_page = "end.html"; 
@$name_sherkat = addslashes($_POST['name_sherkat']);
@$shomare_sabt = addslashes($_POST['shomare_sabt']);
@$faaliat = addslashes($_POST['faaliat']);
@$modir = addslashes($_POST['modir']);
@$phone = addslashes($_POST['phone']);
@$fax = addslashes($_POST['fax']);
@$email = addslashes($_POST['email']);
@$address = addslashes($_POST['address']);
@$discrib = addslashes($_POST['message']);
$body = ""; 
$body .= "نام: " . $name_sherkat . "\n"; 
$body .= "نام خانوادگی: " . $shomare_sabt . "\n"; 
$body .= "مقطع و پایه تحصیلی: " . $faaliat . "\n"; 
$body .= "رشته تحصیلی: " . $modir . "\n"; 
$body .= "نام مدرسه: " . $phone . "\n";
$body .= "شماره تماس: " . $fax . "\n";
$body .= "ایمیل: " . $address. "\n"; 
$body .= "موضوع: " . $email . "\n";
$body .= "tozihat:\n  " . ereg_replace("\n", "\n  ", $discrib) . "\n"; 

$headers = ""; 
$headers .= "From: " . $email_name . " <" . $email_address . ">\n"; 
$headers .= "X-Sender: <" . $email_address . ">\n"; 
$headers .= "X-Mailer: PHP\n"; 
$headers .= "X-Priority: 1\n"; 
$headers .= "Return-Path: <" . $email_address . ">\n"; 
$headers .= "Content-Type: text/html; charset=UTF-8\n"; 

@mail($email_address1, "Contact Center", "<pre>" . $body . "</pre>", $headers);
@mail($email_address2, "Contact Center", "<pre>" . $body . "</pre>", $headers);
@mail($email_address3, "Contact Center", "<pre>" . $body . "</pre>", $headers);
@mail($email_address4, "Contact Center", "<pre>" . $body . "</pre>", $headers); 

header("Location: " . $next_page); 

echo "$send_answer";
?>