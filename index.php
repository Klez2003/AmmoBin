<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hall Of Autism</title>
<style>
  /* Your existing CSS */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: black;
    color: white;
    min-height: 100vh;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
  }
  .banner-container {
    text-align: center;
    margin-bottom: 20px;
  }
  .box-container, .new-box-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    width: 100%;
    max-width: 1200px;
    margin: 20px 0;
  }
  .box, .new-box {
    border: solid 1px rgb(40, 40, 40);
    background-color: rgb(14, 14, 14);
    width: 30%;
    min-width: 250px;
    border-radius: 2px;
    padding: 15px;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    overflow: hidden;
  }
  .box img, .new-box img {
    max-width: 100%;
    max-height: 50%;
  }
  .rainbow {
    text-shadow: 2px 2px 4px #000000;
    -webkit-animation: rainbow 5s infinite;
    animation: rainbow 5s infinite;
  }
  @keyframes rainbow {
    0% { color: red; }
    17% { color: orange; }
    33% { color: yellow; }
    50% { color: green; }
    67% { color: blue; }
    84% { color: purple; }
    100% { color: red; }
  }
  .name-text {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin: 15px 0;
  }
  .title-text {
    text-align: center;
    font-size: 35px;
    font-weight: bold;
  }
</style>
</head>
<body>
  <?php include 'update_views.php'; ?>
  <div class="banner-container">
    <pre>
  _____  _____  ______          _____  ______ _    _ _      
 |  __ \|  __ \|  ____|   /\   |  __ \|  ____| |  | | |     
 | |  | | |__) | |__     /  \  | |  | | |__  | |  | | |     
 | |  | |  _  /|  __|   / /\ \ | |  | |  __| | |  | | |     
 | |__| | | \ \| |____ / ____ \| |__| | |    | |__| | |____ 
 |_____/|_|  \_\______/_/    \_\_____/|_|     \____/|______|
    </pre>
    <strong class="title-text rainbow">Hall Of Autism</strong>
  </div>

  <!-- Display the total views -->
  <p>Total views: <?php echo $current_views; ?></p>

  <div class="box-container">
    <div class="box">
      <img src="assets/users/hoa/packet.png" alt="PacketGuard">
      <div class="name-text rainbow">"PacketGaurd"</div>
      <p>Fat Donny that thinks he's cute, e-dates fat bitches, gets no pussy irl. He spends his days online, chatting up girls with dubious intentions while bragging about his nonexistent social life. Every now and then, he gets caught in his own web of lies, creating elaborate tales about his so-called exploits. But at the end of the day, he remains just a shadow of what he wishes to be—forever searching for validation in the digital world.</p>
    </div>

    <div class="new-box">
      <img src="assets/users/hoa/k.png" alt="Kelly">
      <div class="name-text rainbow">"Kelly"</div>
      <p>Biggest monkey ever, lives in the projects, eats his own nut, and shakes his cheeks on camera for money (Biggest Skid). Kelly has made quite a name for himself on the internet, becoming a meme and a source of entertainment for many. Despite his outrageous antics, he embraces his persona, often stating that he wouldn’t trade his life for anything. He often pulls pranks and goes live to showcase his ridiculous lifestyle, attracting viewers from all corners of the web.</p>
    </div>
    
    <div class="new-box">
      <img src="assets/users/hoa/toxic.jpg" alt="ToxicJ">
      <div class="name-text rainbow">"ToxicJ"</div>
      <p>Originating from Pakistan, thinks he's harmful but can be turned off via the red dot on his forehead, wipes his ass with his hand. ToxicJ has created an image for himself as a tough guy, but those who know him realize that he is all talk. He frequently engages in online disputes, boasting about his supposed exploits. In reality, he’s more about bravado than actual harm. His antics have earned him both a following and a reputation for being more of a nuisance than a threat.</p>
    </div>
    
    <div class="new-box">
      <img src="assets/users/hoa/prosper2.png" alt="Nicholas Prosper">
      <div class="name-text rainbow">"Nicholas Prosper"</div>
      <a href="https://videos.watchpeopledie.tv/17264327796219087.mp4">The Video Where He Explains Why He Killed Them!</a>
      <p>Originating from the UK, this cunt is a pedophile who mutilated his little sister's face and killed his family because of a child in the game called The Walking Dead named Clementine. This cunt thinks he's the chosen one, chosen by Clementine, and since his sister made the "wrong" choices in the game, he killed his entire family. What a cunt. His actions have left a scar on many lives, and he continues to be a figure of infamy in the dark corners of the internet, drawing attention for all the wrong reasons.</p>
    </div>

    <div class="new-box">
      <img src="assets/users/hoa/Novokaine.png" alt="Novokaine">
      <div class="name-text rainbow">"Novokaine"</div>
      <p>Originating from watchpeopledie.tv, this retard showed his small flat topped mushroom shrimp dick.</p>
    </div>
