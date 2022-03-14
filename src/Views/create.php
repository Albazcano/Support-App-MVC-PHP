<?php include './src/Views/layouts/header.php'; ?>

<body>
    
    <a href="index.php">Atrás</a>

    <h1>Support App</h1>
    <h3>Add a request</h3>
    <section>
        <form action="?action=store" method="post">
            
            <label for="user_name">User name</label>
            <input type="text" name="user_name" id="user_name" required>
            
            <label for="topic">Topic</label>
            <select name="topic" id="topic" required>
                <option value="" hidden selected>Select an option</option>
                <option value="Print error">Print error</option>
                <option value="Windows Blue Screen">Windows Blue Screen</option>
            </select>
            
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" required></textarea>
            
           
            <input type="submit" value="Add">
            <button type="reset" onclick = "window.location='index.php';">Borrar</button> 
        </form>        
    </section>
    
    <footer>Copyright - Support App</footer>
</body>
</html>

<style>
    h1 {
        text-align: center;
    }

    h3 {
        text-align: center;
    }

    body {
        margin: 0 auto;
        width: 80%;
        background-color: #DEFCF3;
    }

    #user_name {
        display: flex;
        flex-direction: column;
        margin-bottom: 1.25rem;
    }

    #topic {
        display: flex;
        flex-direction: column;
        margin-bottom: 0.75rem;
    }

    #description {
        display: flex;
        flex-direction: column;
        margin-bottom: 0.75rem;
    }

    footer{
        text-align: center;
        font-weight: bold;
        margin-top: 1.87rem;        
    }
    
</style>