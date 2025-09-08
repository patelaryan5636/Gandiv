<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TravelMate AI Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <style>
      @import url("https://fonts.cdnfonts.com/css/samarkan");
      .slogan {
        font-family: "Samarkan";
      }

      body {
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
      }
      body {
        background: url("./userhome/img/chatbotbg.jpg") no-repeat center center fixed;
        background-size: cover;
        position: relative;
      }

      body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgba(255, 255, 255, 0.8);
        z-index: -1;
      }

      @keyframes gradient {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }

      .main-loader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(8px);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
      }

      .fancy-loader {
        width: 150px;
        height: 150px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .fancy-loader:before,
      .fancy-loader:after {
        content: "";
        position: absolute;
        border-radius: 50%;
        animation: pulsOut 1.8s ease-in-out infinite;
        filter: drop-shadow(0 0 1rem rgba(255, 255, 255, 0.75));
      }

      .fancy-loader:before {
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.15);
        animation-name: pulsIn;
      }

      .fancy-loader:after {
        width: calc(100% - 2rem);
        height: calc(100% - 2rem);
        background: rgba(255, 255, 255, 0.25);
        animation-name: pulsIn;
      }

      @keyframes pulsIn {
        0% {
          transform: scale(1);
          opacity: 1;
        }
        50% {
          transform: scale(1.4);
          opacity: 0.5;
        }
        100% {
          transform: scale(1);
          opacity: 1;
        }
      }

      #responseBox {
        width: 100%;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        color: #333;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        font-family: "Arial", sans-serif;
        line-height: 1.8;
        text-align: left;
        border-left: 5px solid #115d5d;
        transition: all 0.4s ease-in-out;
        margin: 20px auto 60px auto; /* Added 60px bottom margin */
        max-width: 1200px;
      }

      .search-container {
        position: relative;
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
      }

      .search-input {
        width: 100%;
        padding: 15px 60px;
        border-radius: 15px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.9);
        font-size: 16px;
        transition: all 0.3s ease;
      }

      .search-input:focus {
        border-color: #3498db;
        box-shadow: 0 0 15px rgba(52, 152, 219, 0.3);
      }

      .voice-btn {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #666;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .voice-btn:hover {
        color: #3498db;
      }

      .voice-btn.listening {
        color: #e74c3c;
      }

      .send-btn {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        background: #075555;
        border: none;
        color: white;
        padding: 12px;
        border-radius: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .send-btn:hover {
        background: #2980b9;
        /* transform: translateY(-50%) scale(1.1); */
      }

      .time-display {
        position: fixed;
        top: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.9);
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 14px;
        color: #333;
        z-index: 1000;
      }

      .voice-output-btn {
        position: absolute;
        top: 10px;
        right: 20px;
        margin-bottom: 10px;
        background: linear-gradient(145deg, #c4dfdf, #075555);
        color: white;
        border: none;
        padding: 7px 14px;
        border-radius: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        z-index: 10;
      }

      .voice-output-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
      }

      .voice-output-btn.speaking {
        background: linear-gradient(145deg, #e74c3c, #c0392b);
      }

      @keyframes speakingPulse {
        0% {
          transform: scale(1);
        }
        50% {
          transform: scale(1.05);
        }
        100% {
          transform: scale(1);
        }
      }

      .voice-output-btn.speaking {
        animation: speakingPulse 1.5s infinite;
      }

      /* Additional container padding for better spacing */
      .container {
        padding-bottom: 80px; /* Extra bottom padding for the entire container */
      }
    </style>
  </head>

  <body class="min-h-screen pb-10">
    <?php
      include("includes/header.php");
    ?>
    <div class="container mx-auto h-auto px-4 py-4"> <!-- Changed h-[650px] to h-auto -->
      <div class="text-center mb-8">
        <div class="flex justify-center items-center gap-6">
          <div class="logo-container">
            <img
              src="gandiv.png"
              alt="gandiv logo"
              class="w-44 h-40 object-contain transform hover:scale-105 transition-transform duration-300"
            />
          </div>

          <div class="logo-container">
            <img
              src="yatra.png"
              alt="yatra Logo"
              class="w-32 h-32 object-contain transform hover:scale-105 transition-transform duration-300"
            />
          </div>
        </div>

        <h1 class="text-7xl font-bold text-white mb-2">
          <span
            class="slogan bg-clip-text text-transparent bg-[#115d5d] drop-shadow-lg"
          >
            Jharkhand
          </span>
        </h1>

        <p
          class="text-gray-800 text-xl px-18 py-2 max-w-4xl mx-auto leading-relaxed font-serif"
        >
          Explore Jharkhand like never before with our AI-Powered Guide! Get
          instant recommendations, historical insights, and personalized travel
          tips all at your fingertips. Ask anything, from must-visit heritage
          sites to the best local crafts, and let AI enhance your journey! ✨
        </p>

        <div class="flex space-x-2 mt-2 justify-center">
          <span class="bg-red-100 px-2 py-1 rounded text-xs md:text-sm"
            >🤖 Smart Suggestions</span
          >
          <span class="bg-yellow-100 px-2 py-1 rounded text-xs md:text-sm"
            >🌍 Personalized Travel</span
          >
          <span class="bg-green-100 px-2 py-1 rounded text-xs md:text-sm"
            >🗺️ AI-Powered Exploration</span
          >
        </div>
      </div>

      <div class="search-container mb-8 mt-24">
        <button class="voice-btn" id="voiceBtn">
          <i class="fas fa-microphone"></i>
        </button>
        <input
          type="text"
          class="search-input"
          id="searchInput"
          placeholder="Ask me anything about travel..."
        />
        <button class="send-btn" id="sendBtn">
          <i class="fas fa-paper-plane"></i>
        </button>
      </div>

      <div id="responseBox" class="hidden"></div>

      <div class="main-loader-container" id="mainLoader">
        <div class="fancy-loader"></div>
        <div class="text-white text-center mt-4">
          <h3 class="text-xl font-bold">Finding Amazing Places...</h3>
          <p class="mt-2">Just a moment while I prepare your travel guide</p>
        </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
      const apiKey = "AIzaSyCaqqNhFuvZtAmfrKQ8ilsFi1VgZQ2eR4E";
      const endpoint = `https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${apiKey}`;
      let isListening = false;

      const voiceBtn = document.getElementById("voiceBtn");
      const searchInput = document.getElementById("searchInput");
      const sendBtn = document.getElementById("sendBtn");
      const mainLoader = document.getElementById("mainLoader");
      const responseBox = document.getElementById("responseBox");
      const timeDisplay = document.getElementById("timeDisplay");

      const recognition = new (window.SpeechRecognition ||
        window.webkitSpeechRecognition)();
      recognition.continuous = false;
      recognition.lang = "en-US";

      voiceBtn.addEventListener("click", toggleVoiceInput);
      sendBtn.addEventListener("click", handleSearch);
      searchInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter") handleSearch();
      });

      function toggleVoiceInput() {
        if (isListening) {
          recognition.stop();
        } else {
          recognition.start();
          voiceBtn.classList.add("listening");
        }
      }

      recognition.onresult = (event) => {
        const transcript = event.results[0][0].transcript;
        searchInput.value = transcript;
        handleSearch();
      };

      recognition.onend = () => {
        isListening = false;
        voiceBtn.classList.remove("listening");
      };

      async function handleSearch() {
        const query = searchInput.value.trim();
        if (!query) return;

        try {
          mainLoader.style.display = "flex";
          const response = await fetchTravelInfo(query);
          displayResponse(response);
          searchInput.value = "";
        } catch (error) {
          console.error("Search error:", error);
          displayError(error.message);
        } finally {
          mainLoader.style.display = "none";
        }
      }

      async function fetchTravelInfo(query) {
        const currentTime = new Date().toISOString();

        const promptTemplate = `
                Time: ${currentTime}
                User: Krishprajapati15
                Query: ${query}

                Please provide a comprehensive travel guide with the following sections:
                📜 Historical Background
                🏛️ Cultural Significance
                🎉 Local Traditions and Festivals
                🏰 Must-See Places
                🌟 Nearby Attractions
                🌟 Visitor Reviews
                📅 Best Time to Visit
                🍴 Local Cuisine
                🛏️ Accommodation Options
                🚌 Accessibility and Transportation
                💡 Travel Tips
                🛡️ Safety Tips
                🌿 Environmental Impact
                🗣️ Language and Communication
                💱 Currency and Exchange Rates
                ⚖️ Local Laws and Etiquette
                📞 Emergency Contacts
                🛎️ Tourist Services and Facilities
                🗺️ Interactive Maps and Guides
                
                Keep the information concise and well-structured.
            `;

        try {
          const response = await fetch(endpoint, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
              contents: [
                {
                  parts: [{ text: promptTemplate }],
                },
              ],
            }),
          });

          if (!response.ok) throw new Error("API request failed");

          const data = await response.json();
          return data.candidates[0].content.parts[0].text;
        } catch (error) {
          throw new Error("Failed to fetch travel information");
        }
      }

      function displayResponse(text) {
        responseBox.innerHTML = `
        <button class="voice-output-btn" id="voiceOutputBtn" onclick="toggleVoiceOutput()">
            <i class="fas fa-volume-up"></i>
            <span>Listen</span>
        </button>
        <div class="response-content">
            ${marked.parse(text)}
        </div>
    `;
        responseBox.classList.remove("hidden");
        
        // Smooth scroll to response box with offset
        setTimeout(() => {
          responseBox.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
          });
        }, 100);
      }

      function displayError(message) {
        responseBox.innerHTML = `
                <div class="bg-red-100 text-red-700 p-4 rounded-lg">
                    <h3 class="font-bold">Error</h3>
                    <p>${message}</p>
                </div>
            `;
        responseBox.classList.remove("hidden");
      }

      function updateTime() {
        const now = new Date();
        const timeString = now.toISOString().replace("T", " ").substr(0, 19);
        document.getElementById("currentTime").textContent = timeString;
      }

      setInterval(updateTime, 1000);

      document.addEventListener("DOMContentLoaded", () => {
        updateTime();
        mainLoader.style.display = "none";
      });

      let isReading = false;
      let utterance = null;

      function toggleVoiceOutput() {
        const voiceBtn = document.getElementById("voiceOutputBtn");
        const content = document.querySelector(".response-content").textContent;

        if (isReading) {
          window.speechSynthesis.cancel();
          isReading = false;
          voiceBtn.classList.remove("speaking");
          voiceBtn.innerHTML =
            '<i class="fas fa-volume-up"></i> <span>Listen</span>';
        } else {
          utterance = new SpeechSynthesisUtterance(content);
          utterance.rate = 0.9;
          utterance.pitch = 1;
          utterance.volume = 1;

          utterance.onend = () => {
            isReading = false;
            voiceBtn.classList.remove("speaking");
            voiceBtn.innerHTML =
              '<i class="fas fa-volume-up"></i> <span>Listen</span>';
          };

          utterance.onerror = (event) => {
            console.error("Speech synthesis error:", event);
            isReading = false;
            voiceBtn.classList.remove("speaking");
            voiceBtn.innerHTML =
              '<i class="fas fa-volume-up"></i> <span>Listen</span>';
          };

          window.speechSynthesis.speak(utterance);
          isReading = true;
          voiceBtn.classList.add("speaking");
          voiceBtn.innerHTML =
            '<i class="fas fa-volume-mute"></i> <span>Stop</span>';
        }
      }

      window.addEventListener("beforeunload", () => {
        if (isReading) {
          window.speechSynthesis.cancel();
        }
      });

      document.addEventListener("DOMContentLoaded", () => {
        if (!window.speechSynthesis) {
          console.warn("Speech synthesis not supported");
        }
      });
    </script>
  </body>
</html>