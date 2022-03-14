<?php include './src/Views/layouts/header.php'; ?>
<body>

    <main>
        
        <h1>Support App</h1>
        <section id= "newRequest">
            <a href="?action=create">Add request</a>
        </section>
        
        <section class= 'formulario'>
        
            <table>
                <thead id= 'encabezamiento'>
                    <th>User</th>
                    <th>Topic</th>
                    <th>Description</th>
                    <th>Create at</th>
                </thead>
                <tbody>
                    
                <?php 
                
                foreach ($data as $request) {
                    $html = <<<HTML
                    <tr>
                        <td id= 'data'>{$request->getUserName()}</td>
                        <td id= 'topic'>{$request->getTopic()}</td>
                        <td id= 'description'>{$request->getDescription()}</td>                        
                        <td id= 'create'>{$request->getCreateAt()}</td>
                        
                        <td>
                            <a href="?action=edit&&id_request={$request->getId()}"><button id='editar'>Edit</button></a>
                        </td>
                        <td>
                            <a href="?action=delete&&id_request={$request->getId()}"><button>Delete</button></a>
                        </td>
                    </tr>
                    HTML;
                    echo $html;
                }
                ?>  
                </tbody>
            </table>
        
        </section>

    </main>

    <footer>Copyright - Support App</footer>
</body>
</html>

<style>

    h1 {
        text-align: center;
    }

    body {
        margin-left: 9.37rem; 
        width: 80%;
        background-color: #DEFCF3;
    }

    #newRequest {
        margin-bottom: 1.25rem;
    }

    #encabezamiento {
        background-color: lightgrey;
        text-align: center;
        padding: 0.31rem;
        border: 1px solid black;
        margin-top: 1.25rem;
        width: 50%;
    }

    th {
    
        background-color: lightgrey;
        text-align: center;
        padding: 0.5rem;
        border: 1px solid black;
    }

    #data {        
        border: 1px solid black;
    }

    #topic {       
        border: 1px solid black;
    }
    
    #description {
        border: 1px solid black;
    }
    
    #create {
        border: 1px solid black;
    }

    #editar {
        margin-left: 1.25rem;
        margin-right: 0.75rem;
    }
    
    footer{
        text-align: center;
        font-weight: bold;
        margin-top: 1.87rem;        
    }

</style>