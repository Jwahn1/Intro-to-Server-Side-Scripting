<?php
// Index functionality
include "includes/config.php";
include "templates/header.php";
?>

<body>
    <div class="container mt-4 " style="background-color:#fff;height:100%; ">
        <div class="row" style="height:80%; background-color:#bab8b9; border-style:solid;">
            <div class="container" style="width:70%; background-color:#fff; border-style:solid;">
                <div class="col-3 mt-2" style="background-color:#bab8b9;  width:380px; text-align:left">
                <h3>MESSAGES</h3>
                    <form action="includes/message_processing.php" method="POST">
                    <label for="user_target">User to message</label>
                    <input type="text" name="user_target" id="user_target" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
                    <label for="message">message</label>
                    <textarea name="message" id="message" required style="margin-left:100px; width:200px;"></textarea><br>
                    <input type="submit" value="Send Message" name="submit" >
                    </form>
                </div>
                
            </div>
            <h1>Recieved messages</h1>
            <div id="messageContainer" class="container" style="width:70%; background-color:#fff; border-style:solid;">
                
                <!-- use javascript to append recieved messages here -->
            </div>
            <h1>Sent messages</h1>
            <div id="sentMessages" class="container" style="width:70%; background-color:#fff; border-style:solid;">
                
                <!-- use javascript to append recieved messages here -->
            </div>
        </div>
    </div>
</body>

<script>
 
function fetchRecievedMessages() {
    fetch('includes/recieved_messages.php')
        .then(response => response.json()) 
        .then(messages => {
            if (Array.isArray(messages)) {
              
                const messageContainer = document.getElementById('messageContainer');
            
                messageContainer.innerHTML = '';
               
                messages.forEach(message => {
                    const messageElement = document.createElement('div');
                    messageElement.style.borderStyle = 'solid';
                    messageElement.style.padding = '3px ';
                    messageElement.innerHTML = `
                        
                        <p>${message.message_content}</p>
                        <p>Sent By: ${message.sender_name}</p>
                        <p>Sent On: ${message.message_timestamp}</p>
                       
                    `;
                   
                    messageContainer.appendChild(messageElement);
                });
            } 
            
        })
        .catch(error => {
            console.error("error",error);
        });
}
function fetchSentMessages() {
    fetch('includes/sent_messages.php')
        .then(response => response.json()) 
        .then(messages => {
            if (Array.isArray(messages)) {
              
                const messageContainer = document.getElementById('sentMessages');
            
                messageContainer.innerHTML = '';
               
                messages.forEach(message => {
                    const messageElement = document.createElement('div');
                    messageElement.style.borderStyle = 'solid';
                    messageElement.style.padding = '3px ';
                    messageElement.innerHTML = `
                        
                        <p>${message.content}</p>
                        <p>Sent To: ${message.username}</p>
                        <p>Sent On: ${message.timestamp}</p>
                       
                    `;
                   
                    messageContainer.appendChild(messageElement);
                });
            } 
            
        })
        .catch(error => {
            console.error("error",error);
        });
}
setInterval(fetchRecievedMessages, 1000);
setInterval(fetchSentMessages, 1000);
</script>


<?php
    include "templates/footer.php";
?>