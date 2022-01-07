<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base MVC with PHP</title>
</head>

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
<body>
    <a href="index.php">Atrás</a>    

    <h1>Support App</h1>
    <h3>Edit the request</h3>

    <section>
        <form action=<?php echo "?action=update&&id_request={$data[0]->getId()}" ?> method="post">
            
            <label for="user_name">User name</label>
            <input type="text" name="user_name" id="user_name" value=<?=$data[0]->getUserName()?> required>    

            <label for="topic">Topic</label>
            <select name="topic" id="topic" required>
                <option value=<?=$data[0]->getTopic()?> hidden selected><?=$data[0]->getTopic()?></option>
                <option value="Print error">Print error</option>
                <option value="Windows Blue Screen">Windows Blue Screen</option>
            </select>
            
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" required><?=$data[0]->getDescription()?></textarea>
            
            

            <input type="submit" value="Update">
        </form>
        
    </section>

</body>
</html>