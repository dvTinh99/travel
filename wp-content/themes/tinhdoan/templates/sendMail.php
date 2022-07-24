<?php
/*
* Template Name: send-mail
*/
?>
<?php
echo "ok";
var_dump($_POST);
// var_dump($_POST);
// die();
// if (isset($_POST)) {
//     var_dump($_POST);
//     $message = 'Tên tour : ' . $_POST['nametour'] . ' <br> ' .
//         'ID tour : ' . $_POST['idtour']  . ' <br> ' .
//         'Số lượng người lớn : ' . $_POST['nguoilon'] . ' <br> ' .
//         'Số lượng trẻ em : ' . $_POST['treem'] . ' <br> ' .
//         'Số lượng em bé : ' . $_POST['embe'] . ' <br> ' .
//         'Số lượng tên khách : ' . $_POST['name'] . ' <br> ' .
//         'Email khách : ' . $_POST['email'] . ' <br> ' .
//         'Số điện thoại : ' . $_POST['phone'] . ' <br> ' .
//         'Địa chỉ : ' . $_POST['address'] . ' <br> ' .
//         'Lời nhắn : ' . $_POST['message'] . ' <br> ';
//     $to = 'dvtinh.it@gmail.com';

//     // $to = $_POST['your-email'];
//     $subject = "Book a successful tour";
//     $header  =  "From:dvtinh.it@gmail.com \r\n";
//     $header .=  "Cc:dvtinh.it@gmail.com \r\n";
//     $header .= "MIME-Version: 1.0\r\n";
//     $header .= "Content-type: text/html\r\n";
//     $message_mail = '<h2>Khách mới</h2>';
//     $message_mail .= '<h3>Your information</h3>  <br>';
//     $message_mail .= $message;

//     // $to_admin = wp_mail($to,$subject,$message_mail,$header);
//     // $to_custome = wp_mail('havantrungbdu@gmail.com',$subject,$message_mail,$header);
// } else {
//     var_dump("not ok");
//     die();
// }
?>