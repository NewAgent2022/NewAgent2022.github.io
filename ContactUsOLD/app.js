// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyAQEzq_zmtofroDzKWZAzqunAzT_yS4ZzM",
  authDomain: "ysgv3content.firebaseapp.com",
  databaseURL: "https://ysgv3content-default-rtdb.firebaseio.com",
  projectId: "ysgv3content",
  storageBucket: "ysgv3content.appspot.com",
  messagingSenderId: "580808708606",
  appId: "1:580808708606:web:913a233fa59c67f0de70af",
  measurementId: "G-VRQK2XRQY4"
  };
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Refernece contactInfo collections
let contactInfo = firebase.database().ref("contactforminfo");

// Listen for a submit
document.querySelector(".contact-form").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  //   Get input Values
  let name = document.querySelector(".name").value;
  let email = document.querySelector(".email").value;
  let message = document.querySelector(".message").value;
  console.log(name, email, message);

  saveContactInfo(name, email, message);

  document.querySelector(".contact-form").reset();
}

// Save infos to Firebase
function saveContactInfo(name, email, message) {
  let newContactInfo = contactInfo.push();

  newContactInfo.set({
    name: name,
    email: email,
    message: message,
  });
}
