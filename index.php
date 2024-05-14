<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class='contact_us_form_body'>
    <section class='contact_us_form_wrap'>
        <h1 class='contact_us_form_title'>Contact Us </h1>
        <form action="./send.php" method="POST" class='contact_us_form'>
            <!-- First Name input field -->
           <div class='contact_form_input_inner'>
                <label class='input_label' for="first_name">First Name</label>
                <input class='contact_form_input' type='text' id='first_name'
                name='first_name' placeholder='Enter First Name'/>
           </div>

            <!-- Last Name input field -->
           <div class='contact_form_input_inner'>
                <label class='input_label' for="last_name">Last Name</label>
                <input class='contact_form_input' type='text' id='last_name'
                name='last_name' placeholder='Enter Last Name'/>
           </div>

            <!-- Email address input field -->
           <div class='contact_form_input_inner'>
                <label class='input_label' for="email_address">Email Address</label>
                <input class='contact_form_input' type='email' id='email_address'
                name='email' placeholder='Enter Email Address'/>
           </div>

            <!-- Subject input field -->
            <div class='contact_form_input_inner'>
                <label class='input_label' for="subject">Subject</label>
                <input class='contact_form_input' type='text' id='subject'
                name='subject' placeholder='Enter Subject'/>
           </div>

            <!-- Message input field -->
            <div class='contact_form_input_inner'>
                <label class='input_label' for="message">Message</label>
                <textarea class='contact_form_input_textarea' id='message'
                name='message' placeholder="Write Message Here!"
                rows="4" cols="50"></textarea>
           </div>

            <!-- Submit button -->
            <div class='contact_form_input_inner'>
                <input type="submit" value="Submit" class='contact_us_submit_btn' name='submit'>
           </div>
        </form>
        
    </section>
</body>
</html>