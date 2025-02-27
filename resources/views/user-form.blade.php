<!-- TUTORIAL 14 -->
 
 
 <div>
 
 <div class="try">
 <h2>FILL UP FORM</h2>
 </div>

<form action="userfromcall" method="post">
    @csrf
    <div class="input-form">
        <input type="text" placeholder="enter username" name="username" required>
    </div>
    <div class="input-form">
        <input type="text" placeholder="enter email" name="email" required>
    </div>
    <div class="input-form">
        <input type="text" placeholder="contact" name="contact" required>
    </div>
    
    <div class="checkbox-container">
    <h3>Skills:</h3>
    <input type="checkbox" name="skill" id="php" value="php" >
    <label for="php">PHP</label>

    <input type="checkbox" name="skill" id="java" value="java" >
    <label for="java">JAVA</label>

    <input type="checkbox" name="skill" id="c++" value="c++" >
    <label for="c++">C++</label>
    </div>

    <div class="radio-container">
    <h3>Gender:</h3>
    <input type="radio" name="gender" id="male" value="male" >
    <label for="female">Male</label>
    <input type="radio" name="gender" id="female" value="female" >
    <label for="female">Female</label>
    </div>
    <div class="age-container">
    <h3 class="ageH">Age:</h3>
    <input type="range" name="age" id="age" max="100" min="18">
    </div>
    <div class="city-container">
        <h3 class="cityh">City:</h3>
        <select name="city" id="city">
            <option value="Bacoor">Bacoor</option>
            <option value="Las piñas">Las piñas</option>
            <option value="Cavite">Cavite</option>
        </select>
    </div>


    <div class="input-form">
        <button>Add New user</button>
    </div>


</form>


 </div>
 <style>
    .ageH{
        margin-left:-150px;
    }
    .cityh{
        margin-left:-180px;
    }
    input[type="checkbox"],input[type="radio"] {
    display: inline-block; 
    width: 15px;
    height: 15px;
    margin-right: 5px; 
    cursor: pointer;
    }
    input[type="range"] {
    display: block;
    width: 100%; 
    max-width: 300px; 
    height: 8px; 
    border-radius: 5px; 
    background: #ddd; 
    outline: none;
    transition: all 0.3s ease-in-out;
    margin-top:-50px;
    }
    input[type="range"]:hover {
    background: #bbb;
    }

    select {
    width: 100%; 
    height: 50px; 
    padding: 10px;
    padding-left:40px;
    padding-right:40px;
    font-size: 16px;
    border: 2px solid #4CAF50; 
    border-radius: 5px;
    background-color: white;
    margin-top:-50px;
    margin-bottom:20px;
    color: black;
    cursor: pointer;
    outline: none;
    transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    select:hover, select:focus {
    border-color: #45a049; 
    box-shadow: 0 0 8px rgba(72, 239, 128, 0.5);
    }
    

    .checkbox-container{
    display: flex;
    flex-direction: row; 
    gap: 10px; 
    align-items: center;
    margin-top:2px;
    }
    .radio-container {
    display: flex;
    flex-direction: row;
    gap: 10px; 
    align-items: center;
    margin-right:50px;
    }
    
    h3 {
    width: 100%; 
    font-size: 16px;
    color: #333;
    font-weight: bold;
    position: relative; 
    
    margin-left:-65px;
    
    
}
    
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg,rgb(248, 190, 192),rgba(248, 198, 209, 0.94)); /* Gradient Background */
    margin: 0;
    font-family: Arial, sans-serif;
    }
    h1{
        padding:5px;
    }
    .try {
    background-color: white;
    border-radius: 40%;  
    width: 250px;        
    height: 100px;       
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;  
    margin-top:15px;
    margin-bottom:-105px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}
    div {
    display: flex;
    flex-direction: column;
    align-items: center;
    }   
    form {
        
    display: flex;
    flex-direction: column;
    align-items: center;
    background: rgba(252, 175, 140, 0.2);
    padding: 100px;
    border-radius: 15px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    width: 350px;
    border:1px solid white;
    }
    input{
    color: black;
    padding:30px;
    margin: 10px;
    border-radius: 10px;
    border-color: green;
    width: 400px;
    height: 50px;
    background: rgba(255, 255, 255, 0.7);
    box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.1);
    transition: border-color 0.3s ease-in-out;
    font-size: 16px;
    }
    


    button{
    background-color:orange;
    color: black;
    padding: 10px;
    margin: 5px;
    margin-top:20px;
    margin-bottom:-20px;
    border-radius: 10px;
    border-color: green;
    width: 300px;
    height: 50px;
    cursor: pointer; 

    transition: background-color 0.3s, transform 0.2s;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }
    button:hover {
    background-color: darkorange; 
    transform: scale(1.05);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }
    @media (max-width: 768px) {
    .try {
        width: 100px;
        height: 100px;
        font-size: 14px;
        margin-top: -50px;
    }

    form {
        padding: 30px;
        width: 95%;
    }

    input {
        padding: 12px;
        font-size: 14px;
    }

    button {
        padding: 10px;
        font-size: 14px;
    }
    }
 </style>