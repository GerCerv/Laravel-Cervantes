<!-- TUTORIAL 13 -->
<x-message-banner msg="User sign up complete" class="success"/>
<x-message-banner msg="No user found" class="error"/>
<x-message-banner msg="Wrong password/email" class="warning"/>
<h1>HOME PAGE OF TUTORIAL 13</h1>

<style>
    
    .success{

        
    background-color: #b1e9b1;
    padding: 5px;
    display: inline-block;
    margin: 5px;
    border-radius: 5px;

    }
    .error{
    background-color:rgb(248, 55, 55);
    padding: 5px;
    display: inline-block;
    margin: 5px;
    border-radius: 5px;
    }
    .warning{
    background-color:rgb(248, 171, 55);
    padding: 5px;
    display: inline-block;
    margin: 5px;
    border-radius: 5px;
    }

    @media (max-width: 768px) {
        .message-banner {
            font-size: 14px;
            padding: 10px;
        }
    }
</style>