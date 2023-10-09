<?php
$result = mail("dp.workuk@gmail.com","Заявка с сайта","\nФорма: $_POST[fn] \nИмя: $_POST[name] \nТелефон: $_POST[numb]", "From: admin@sitename.com \r\nContent-type: text/plain; charset=\"utf-8\"\r\n");

if ($result) {
    header("Location:index.html");
}
else{
    header("Location:index.html?status=false");
}
?>