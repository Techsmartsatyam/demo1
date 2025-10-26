<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Me | Modern Style</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
   <link rel="shortcut icon" href="port.png" type="image/x-icon">
  <style>
    /* Base */
    * {margin: 0; padding: 0; box-sizing: border-box;}
    body {
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      background: linear-gradient(135deg,#667eea,#764ba2);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px;
    }

    .container {
      background: rgba(255,255,255,0.15);
      border-radius: 20px;
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      display: grid;
      grid-template-columns: 1fr 300px;
      overflow: hidden;
      max-width: 1000px;
      width: 100%;
    }

    /* Left card (Form) */
    .form-box {
      padding: 40px;
      color: white;
      animation: fadeIn 1s ease-in-out;
    }
    .form-box h1 {
      font-size: 2rem;
      margin-bottom: 20px;
    }
    .form-box form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .form-box input, .form-box textarea {
      padding: 14px;
      border-radius: 12px;
      border: none;
      outline: none;
      font-size: 1rem;
      transition: all 0.3s ease;
    }
    .form-box input:focus, .form-box textarea:focus {
      box-shadow: 0 0 10px rgba(255,255,255,0.6);
      transform: scale(1.02);
    }
    .form-box button {
      background: #ff6b6b;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 12px;
      padding: 14px;
      cursor: pointer;
      transition: all 0.3s;
    }
    .form-box button:hover {
      background: #ff4757;
      transform: translateY(-3px);
    }

    /* Right card (Social) */
    .info-box {
      background: rgba(255,255,255,0.2);
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 20px;
      color: white;
      animation: fadeInRight 1.2s ease-in-out;
    }
    .info-box h2 {
      font-size: 1.4rem;
      margin-bottom: 10px;
    }
    .socials {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .socials a {
      text-decoration: none;
      color: white;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: transform 0.3s ease, color 0.3s;
    }
    .socials a:hover {
      transform: translateX(8px) scale(1.05);
      color: #ffe66d;
    }

    /* Animations */
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }
    @keyframes fadeInRight {
      from {opacity: 0; transform: translateX(40px);}
      to {opacity: 1; transform: translateX(0);}
    }

    /* Responsive */
    @media (max-width: 768px) {
      .container {
        grid-template-columns: 1fr;
      }
      .info-box {text-align: center;}
      .socials {align-items: center;}
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Left -->
    <div class="form-box">
      <h1>Contact Me</h1>
      <form action="connect2.php" method="post"   id="contactForm" action="satyam.php" method="post">

        <input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
        <input type="phone"id="phone" name="phone"placeholder="Enter your Phone Number:"required>
        <input type="city"id="city" name="city" placeholder="Enter your city name:"reqquired>
           <textarea id="message" name="other"  placeholder="Your Message..." required></textarea>
           <button type="submit">Send Message</button>
      </form>
    </div>

    <!-- Right -->
    <div class="info-box">
      <h2>Let's Connect</h2>
      <div class="socials">
        <a href="https://www.instagram.com/techsmartsatyam?igsh=dmpla3ZnNmNlOHV3">
        <img src="insta1.jpeg" height="20" alt="">  
        Instagram</a>
        <a href="https://github.com/Techsmartsatyam/my-portfolio/blob/main/3d%20image%20.html" target="_blank">
         <img src="https://cdn.worldvectorlogo.com/logos/github-icon-1.svg"  height="25"  alt="GitHub Logo">  
        GitHub</a>
        <a href="https://www.linkedin.com/in/tech-smart-satyam-309877286?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
          <img src="link.png" height="25" alt="">
        LinkedIn</a>
        <a href="https://www.facebook.com/share/1CLFcRoC9w/" target="_blank">
        <img src="face.png" height="25" alt="">  
        Facebook</a>
      </div>
    </div>
  </div>

  <script>
    // Import the functions you need from the SDKs you need

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional


// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
    const form = document.getElementById("contactForm");
    form.addEventListener("submit", e => {
      e.preventDefault();
      const name = document.getElementById("name").value.trim();
      alert(`Thanks ${name}, your message has been sent ✅`);
      form.reset();
    });
  </script>
</body>
</html>

