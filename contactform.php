<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "sukanth1998@gmail.com";
  $name = $_REQUEST['candidatename'];
  $email = $_REQUEST['email'];
  $country = $_REQUEST['country']; 
  $subject = "Appointment for the country - ".$country;
  $phonenumber = $_REQUEST['phonenumber'];
  $edu = $_REQUEST['edu'];
  $comment = $_REQUEST['comment'];
  
  // set content-type for sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: '.$admin_email."\r\n";
  $headers .= 'Cc: '.$email."\r\n";
  
  //send email
  $body = "Name: ".$name.", Email: ".$email.", Phone Number: ".$phonenumber.", Educational Qualification: ".$edu.", Country wish - ".$country.", Custom Message: ".$comment;
  //mail($admin_email, "$subject", $body, "From:" . $email);
  mail($admin_email, "$subject", $body, $headers);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
    <table>
        <tr>
            <td colspan="2">Appointment Fixing Form</td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input name="candidatename" type="text"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" type="text"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input name="phonenumber" type="text"></td>
        </tr>
        <tr>
            <td>Educational Qualification</td>
            <td><input name="edu" type="text"></td>
        </tr>
        <tr>
            <td>Country you wish...</td>
            <td>
                <select name="country">
                    <option>Italy</option>
                    <option>France</option>
                    <option>Others</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Custom Message</td>
            <td><textarea name="comment" rows="15" cols="40"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit Form"></td>
        </tr>
    </table>

  </form>
  
<?php
  }
?>