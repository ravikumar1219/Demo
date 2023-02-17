<?php
    //DB Connection
    $connection = mysqli_connect("localhost","root","","cpa");
                    
    //count of message for dashboard
    $count_messagesQuery = "SELECT COUNT(*) as count FROM contact_form";
    $count_messages_result = mysqli_query($connection,$count_messagesQuery);
    $count_messages = mysqli_fetch_array($count_messages_result);

    //home_page data
    $home_page_query = mysqli_query($connection,"SELECT * FROM home_page WHERE id=1");
    $home_page = mysqli_fetch_array($home_page_query);

    function homePageUpdate($connection,$mainHeading,$mainParagraph,$mainButton){
        if(mysqli_query($connection,"UPDATE home_page SET main_heading = '$mainHeading' , main_paragraph = '$mainParagraph' , main_button = '$mainButton' WHERE id = 1")){
            return true;
        }
    }
    

    //Meesages Page
    $messagesQuery = "SELECT  @a:=@a+1 serial_number, name,email,subject,message,time_stamp FROM contact_form, (SELECT @a:= 0) AS a;";
    $messages_result = mysqli_query($connection,$messagesQuery);
?>