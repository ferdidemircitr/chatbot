<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Projesi</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/chatbot.css">
</head>
<body>
    <div class="chatbot-container">
        <div class="chatbot-toggle">
            <div class="chatbot-logo">
                <i class='bx bxs-message-square-dots'></i>
            </div>
        </div>
        <div class="screen">
            <div class="screen-header">
                <div class="header-logo">
                    <i class='bx bxs-message-square-dots'></i>
                </div>
                ChatBot
                <div class="close">
                    <i class='bx bx-x'></i>
                </div>
            </div>
            <div class="messageDisplaySection">
                <div class="chat botMessage">
                 Merhaba! Ben sadece bazı sık sorulan soruları yanıtlamaya programlanmış bir robotum. Aklına takılan ne varsa     bana sorabilirsin?

                </div>
                <div class="messageContainer">
                    
                </div>
            </div>
            <div class="userInput">
                <input type="text" name="message" id="message" autocomplete="OFF" placeholder="Mesajınızı yazınız." required>
                <a id="send" name="send"><i class='bx bxs-send'></i></a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>