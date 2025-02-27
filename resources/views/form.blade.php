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
    <div class="input-form">
        <button>Add New user</button>
    </div>


</form>


 </div>
 <style>
    /* Full Page Styling */
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
    border-radius: 40%;  /* Makes it a perfect circle */
    width: 250px;        /* Set width */
    height: 100px;       /* Set height */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;  /* Center text inside */
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
    margin: 15px;
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