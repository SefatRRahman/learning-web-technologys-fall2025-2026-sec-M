<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form</title>
</head>
<body>

<form action="contactCheck.php" method="post" enctype="multipart/form-data" id="contactForm">
    <fieldset>
        <h2>Contact Us</h2>

        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>

            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject" id="subject">
                        <option value="">Select Subject</option>
                        <option value="General">General</option>
                        <option value="Support">Support</option>
                        <option value="Feedback">Feedback</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Message</td>
                <td><textarea name="message" id="message" rows="5"></textarea></td>
            </tr>

            <tr>
                <td>Attachment</td>
                <td><input type="file" name="attachment" id="attachment"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Send"></td>
            </tr>
        </table>

        <p id="errorMsg" style="color:red;"></p>

    </fieldset>
</form>

<script src="validation.js"></script>
</body>
</html>
