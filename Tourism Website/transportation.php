<!DOCTYPE html>
<html>
<head>
  <style>


    body {
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: linear-gradient(45deg, #FF6B6B, #FFC777, #FF6B6B);


}

#boxContainer {
  width: 1000px;
  height: 600px;
  background: linear-gradient(45deg, #FF6B6B, #FFC777, #FF6B6B);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  display: flex;
justify-content: center;
  align-items: center;
}

#boxContent {
  text-align: center;
}


h1 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

p {
  font-size: 18px;
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}



body {
  font-family: Arial, sans-serif;
  margin: 20px;

}

h1 {
  text-align: center;

}

#bookingForm {
  margin-bottom: 30px;
}

h2 {
  margin-top: 20px;
}

#resultsContainer {
  display: none;
}

#results {
  border: 10px solid #ccc;
  padding: 10px;
  margin-top: 10px;
}

#searchButton {
  margin-top: 10px;
}

div a {
font-size: 15px;
color: black;
display: block;
padding: 10px;
padding-left: 15px;
padding-right: 15px;

text-decoration: none;
outline: none;
}
div a:hover {
color:black;
background: orange;
position: relative;

}
  </style>
</head>
<body>
  
 <div id="boxContainer">
    <div id="boxContent">
   
      <h1>Online Booking Service</h1>

      <div id="bookingForm">
        <h2>Select a Mode of Transport</h2>
        <select id="transportSelect">
          <option value="airplane">Airplane</option>
          <option value="train">Train</option>
          <option value="bus">Bus</option>
        </select>
    
        <h2>Choose a Destination</h2>
        <input type="text" id="destinationInput" placeholder="Enter destination">
    
        <h2>Select a Date</h2>
        <input type="date" id="dateInput">
    
        <button id="searchButton" onclick="search()">Search</button>
      </div>
    
      <div id="resultsContainer">
        <h2>Search Results</h2>
        <div id="results"></div>
      </div>
    
      <script>
          function search() {
      var transport = document.getElementById('transportSelect').value;
      var destination = document.getElementById('destinationInput').value;
      var date = document.getElementById('dateInput').value;
    
      // You can perform additional validation and data processing here
    
      // Example: Show search results in a div
      var resultsDiv = document.getElementById('results');
      resultsDiv.innerHTML = '';
      resultsDiv.innerHTML += '<p>Transport: ' + transport + '</p>';
      resultsDiv.innerHTML += '<p>Destination: ' + destination + '</p>';
      resultsDiv.innerHTML += '<p>Date: ' + date + '</p>';
    
      var resultsContainer = document.getElementById('resultsContainer');
      resultsContainer.style.display = 'block';
    }
    
          
      </script>

<button><a href="https://www.abhibus.com/?utm_source=google&utm_medium=cpc&utm_campaign=GenericKW&utm_term=bus%20booking&utm_content=Generic&gclid=CjwKCAjwzJmlBhBBEiwAEJyLu4JqXSJ5qKHxFYCcnSQtclglQ9Z1AJOjFckOWkFLuq3zf1GY2XZVJxoC2_YQAvD_BwE">Book a seat</a>
      </button>
    </div>
  </div>
</body>
</html>